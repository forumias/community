<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use Auth;


use App\User;
use DB;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index(Request $request) {
       
        if(@$request->com_id != ''){
            $some_data = array(
                'studentId' => $request->com_id 
            );	
           // echo '&&&&&&&&:'.$request->com_id;die;
            $some_data_json = json_encode($some_data, true);

            $curl = curl_init();
    
            // We POST the data
            curl_setopt($curl, CURLOPT_POST, 1);
            // Set the url path we want to call
            curl_setopt($curl, CURLOPT_URL, 'https://one.forumias.com/api/v0/getStudentDetails');   
            // Make it so the data coming back is put into a string
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            // Insert the data
            curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data_json);
            
            // You can also bunch the above commands into an array if you choose using: curl_setopt_array
            
            // Send the request
            $result = curl_exec($curl);
            // Free up the resources $curl is using
            curl_close($curl);
            $result = json_decode($result, true);
            $result = $result['data'];
            $user_info = User::where('auth_id',$request->com_id )->first();
           
        //echo '####<pre>';print_r($result);die;
            $auth_token = md5($_SERVER['HTTP_USER_AGENT']);
           // echo $auth_token;die;

            if($user_info){
                $profile_pic = $user_info->image;
                if(@$result['profilePhoto'] != ''){
                    $profile_pic = 'https://one.forumias.com/images/tmp/'.@$result['profilePhoto'];
                }
                $user_info->update([
                    'name' => $result['name'],
                    'token' => $auth_token,
                    'image' => $profile_pic,
                    'full_name' => $result['fullName'],
                    'email' => $result['email'],
                    'mobile_number' => $result['mobile'],
                    'roll_number' => @$result['roll_number'],
                ]);
               // echo '####<pre>';print_r($user_info);die;

            }else{
                //echo 'sdfdf';die;
                if(@$result['profilePhoto'] == '' || @$result['profilePhoto'] == 'null'){
                    $profile_pic =  'http://vanillicon.com/'.md5($result['email']).'_100.png';
                }else{
                    $profile_pic =  'https://one.forumias.com/images/tmp/'.@$result['profilePhoto'];
                }
                $user_info = User::create([
                    'auth_id' => $request->com_id,
                    'token' => $auth_token,
                    'type' => 2,
                    'name' => $result['name'],
                    'image' => $profile_pic,
                    'full_name' => $result['fullName'],
                    'password' => 'a123456',
                    'email' => $result['email'],
                    'mobile_number' => $result['mobile'],
                    'roll_number' => @$result['roll_number'],
                 ]);
                // echo '@@@@@@@@@@@@@@@<pre>';print_r($user);die;
            }
            $email = $result['email'];
            $psw = 'a123456';
            return view('logtest', compact('email', 'psw'));	
								
        }else{
            return redirect()->to('/')
								->with('error','Something went wrong.');
        }
            
    }
    public function check_log(Request $request){
        $email = $request->flag;
        $psw = 'abc@1234';
        return view('logtest', compact('email', 'psw'));	
    }
    public function checklogout(Request $request){
        Auth::logout();
        
        return redirect()->to('/')
								->with('success','You have been logged out successfully.');
    }

    public function user_listing(Request $request){
        $auth_id = @Auth::user()->id;
        $users_listing = User::where('type', 2)->where('status', 1)->where('id', '!=', $auth_id)->with(['followInfo'=>function($subQuery) use ($auth_id) {	
			$subQuery->whereRaw("find_in_set('".$auth_id."',follow_by)");
			$subQuery->select('id', 'user_id');
        }])->get();
        
        

        return view('users.user_listing', compact('users_listing'));	
    }
    public function detail(Request $request, $id){
        $id = convert_uudecode( base64_decode  ($request->id));
        $user_info = User::where('id', $id)->select('id', 'name', 'full_name', 'image','about')->with(['followInfo'=>function($query){
            $query->where('type', 2);
            $query->select('user_id', 'follow_by');
        }])->first();
        
        $following_count = \App\Follow::where('type', 2)->whereRaw("find_in_set('".$id."',follow_by)")->count();
        $post_list = \App\Post::where('user_id', $id)->where('status', 1)->select('id', 'title', 'created_at')->orderBy('id', 'DESC');
        $user_posts = $post_list->limit(8)->get();
        $post_count = $post_list->count();
        //=================================
        //-----------------------------
        $user_comments = \App\Comment::where('user_id', $id)->get()->pluck('post_id')->toArray();
        $user_comments =  array_unique($user_comments);
        //echo '<pre>';print_r($user_comments);die;
        $auth_id = @Auth::user()->id;

        $stories_query = \App\Post::where('status', 1)->where('user_id', $id)->with(['userInfo'=>function($uqr){
			$uqr->select('id', 'name', 'full_name', 'image', 'about');
		}, 'commentInfo', 'likeInfo'=>function($qr){
			$qr->where('like_type', 0);
			$qr->select('post_id', 'user_ids', 'like_count');
        }]);
        if(count($user_comments) > 1){
            $stories_query->orWhereIn('id', $user_comments);
        }else if(count($user_comments) == 1){
            $stories_query->orWhere('id', @$user_comments[0]);
        }
        $stories = $stories_query->orderBy('id', 'DESC')->get();
       // echo '###<pre>';print_r($stories);die;
		$like_info = $stories->pluck('likeInfo.user_ids','likeInfo.post_id')->toArray();
		$like_user_info = array();
		foreach($like_info as $key=>$one_story){
			$one_story_arr = explode(',',$one_story);
			if(count($one_story_arr) > 1){
				$like_users = User::whereIn('id', $one_story_arr)->select('full_name','image')->limit(8)->get();
				$like_user_info[$key]['name'] = $like_users->pluck('full_name')->toArray();
				$like_user_info[$key]['img'] = $like_users->pluck('image')->toArray();
				//echo '<pre>';print_r($like_user_info);die;
			}elseif(count($one_story_arr) == 1){
				$like_users = User::where('id', @$one_story_arr[0])->select('full_name','image')->get();
				$like_user_info[$key]['name'] = $like_users->pluck('full_name')->toArray();
				$like_user_info[$key]['img'] = $like_users->pluck('image')->toArray();
			}
		}
		

		$tag_idz  = $stories->pluck('tag_id');
		$tag_id_arr = array();
		foreach($tag_idz as $oneTagId){
			if($oneTagId != ''){
				$exploaded = explode(',', $oneTagId);
				$tag_id_arr = array_merge($tag_id_arr, $exploaded);
			}
		}
		$tag_id_arr = array_unique($tag_id_arr);
		$tags = array();
		if(count($tag_id_arr) > 1){
			$tags = \DB::table("tags")->whereIn('id', $tag_id_arr)->pluck('title', 'id')->toArray();
		}elseif(count($tag_id_arr) == 1){
			$tags = \DB::table("tags")->where('id', $tag_id_arr[0])->pluck('title', 'id')->toArray();
		}
		
        $following = \App\Follow::where('type', 2)->where('user_id', $id)->whereRaw("find_in_set('".$auth_id."',follow_by)")->count();

        //echo 'fl: '.$following;die;

        if($user_info){
            return view('users.detail', compact('user_info', 'following_count', 'user_posts', 'stories', 'tags', 'like_user_info', 'following', 'post_count'));
        }else{
            return redirect()->to('/')->with('error','Somthing went wrong, please try again.');
        }
       
        	
       
    }
    public function onboarding(Request $request){
        $auth_id = @Auth::user()->id;
        $user_info = User::where('id', $auth_id)->where('onboarding', 0)->first();
        if($user_info){
            $group_listing = \App\Tag::where('status', 1)->where('created_by', 0)->with(['followInfo'])->orderBy('title', 'ASC')->get();
        }else{
            return redirect()->to('/');
        }
        //echo '$$$$$$$$$$$$$$: <pre>';print_r($user_info);die;
        return view('users.onboard', compact('group_listing'));	
    }
    public function onboarding_status(Request $request){
        $auth_id = @Auth::user()->id;
        $user_info = User::where('id', $auth_id)->first();
        $user_info->update(['onboarding'=>1]);
        return redirect()->to('/')->with('success','Your profile is completed successfully.');
    }

}
