<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Auth;
use Image;
use App\Post;
use App\Tag;
use DB;

class GroupsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index() {
        $searchparam = request()->input('search');
        $perpage = 50;
        $query1 = \DB::table("tags")->where(function ($query) 
            {
                $searchparam = request()->input('search');
                    $query->where(\DB::raw("title"), 'like', '%' . $searchparam . '%');
            });
            
        $totalCount = \DB::table("tags")->count();
        //echo $totalCount;die;
		$page = request()->input('page');
		$query1->orderBy('id', 'DESC');	
        if($page != 'all'){
			$tags = $query1->paginate($perpage);
			//echo '<pre>';print_r($tags);die;
            return view('groups/index',compact('tags', 'totalCount'))->with('i', (request()->input('page', 1) - 1) * $perpage);	
        }else{
            //$request['page'] = 1;
            $page=1;
            //$i = 0;
            $tags = $query1->get();
            return view('groups/index',compact('tags', 'totalCount', 'page','i'))->with('i', 0);	
        }
            
    }

		public function show(Tag $tag)
			{
				$thumbnail_path = url('/public/uploads/logo/thumbnail/');
				return view('groups.show',compact('vendor','thumbnail_path'));
			}
	
		protected function create(Request $request)
			{
				
				return view('groups.create');
			}
	
		public function edit($id)
			{
				
				$tag = Tag::find($id);
				//echo '<pre>';print_r($tag);die;
				return view('groups.edit',compact('tag'));
			}
	
	
		public function update($id, Request $request)
			{ 
				$tag = Tag::find($id);
				
				echo $tag->tag_img;
				
				if($tag->tag_img && $request->image && file_exists(public_path('images/tags/original/'. $tag->tag_img))) {
					unlink(public_path('images/tags/thumb/'. $tag->tag_img));
				    unlink(public_path('images/tags/original/'. $tag->tag_img));
				}
				
				if(@$request->image != ''){
					$ext_arr = array('JPEG','jpeg','PNG','png','GIF', 'gif', 'JPG', 'jpg');
					$file = $request->file('image');
					
					if (in_array($file->getClientOriginalExtension(), $ext_arr)){

					$thumbnail_path = public_path('images/tags/thumb/');
					$original_path = public_path('images/tags/original/');
					$file_name = 'tags_'.'_'. $this->quickRandom(16) . '.' . $file->getClientOriginalExtension();
						Image::make($file)
							->save($original_path . $file_name)
							->resize(120, 120)
							->save($thumbnail_path . $file_name);
							$request->offsetSet('tag_img', $file_name);
					}
					$request->offsetSet('tag_slug', str_slug($request->title));
					
				}
				$tag->update($request->all());
				
				return redirect()->route('groups.index')
								->with('success','Tag updated successfully.');
			}
	
		public function store(Request $request)
			{
				
				request()->validate([
					'title' => 'required',
					'description' => 'required',
					'image' => 'required',
					//'email' => 'required|string|unique:users,email',
					
				]);	
				
				if(@$request->image != ''){
					$ext_arr = array('JPEG','jpeg','PNG','png','GIF', 'gif', 'JPG', 'jpg');
					$file = $request->file('image');
					//echo $file->getClientOriginalExtension();die;
					if (in_array($file->getClientOriginalExtension(), $ext_arr)){

					$thumbnail_path = public_path('images/tags/thumb/');
					$original_path = public_path('images/tags/original/');
					$file_name = 'tags_'.'_'. $this->quickRandom(16) . '.' . $file->getClientOriginalExtension();
						Image::make($file)
							->save($original_path . $file_name)
							->resize(120, 120)
							->save($thumbnail_path . $file_name);
						
							$request->offsetSet('tag_img', $file_name);
						
					//echo '<pre>';print_r($request->file('image'));die;
					}
					$request->offsetSet('tag_slug', str_slug($request->title));
					
				}
				$tag = Tag::create($request->all());

				return redirect()->route('groups.index')
								->with('success','Tag has been created successfully.');
			}
		public function destroy($id, Tag $tab)
		{
			$tag = Tag::find($id);
			$tag->delete();
			return redirect()->route('groups.index')
							->with('success','Tag deleted successfully.');
		}
	public function groups(Request $request)
	{
		$tags_listing = Tag::where('status', 1)->where('created_by', 0)->with(['followInfo'])->orderBy('title', 'ASC')->get();

		//echo '<pre>';print_r($tags_listing);die;
		return view('groups.groups', compact('tags_listing'));
	}
	
	public static function quickRandom($length = 16)
	{
		$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
	}
   
	public function dashboard(Request $request, $tag=null){
		$tag_info = Tag::where('status', 1)->where('tag_slug', trim($tag))->first();
		$auth_id = @Auth::user()->id;
		//echo '<pre>';print_r($tag_info);die;
		if($tag_info){
			$stories = Post::where('status', 1)->where('tag_id', $tag_info->id)->with(['userInfo'=>function($uqr){
				$uqr->select('id', 'name', 'full_name', 'image', 'about');
			}, 'commentInfo', 'likeInfo'=>function($qr){
				$qr->where('like_type', 0);
				$qr->select('post_id', 'user_ids', 'like_count');
			}])->orderBy('id', 'DESC')->limit(2)->get();
			
			$like_info = $stories->pluck('likeInfo.user_ids','likeInfo.post_id')->toArray();
			$like_user_info = array();
			foreach($like_info as $key=>$one_story){
				$one_story_arr = explode(',',$one_story);
				if(count($one_story_arr) > 1){
					$like_users = \App\User::whereIn('id', $one_story_arr)->select('full_name','image')->limit(8)->get();
					$like_user_info[$key]['name'] = $like_users->pluck('full_name')->toArray();
					$like_user_info[$key]['img'] = $like_users->pluck('image')->toArray();
					//echo '<pre>';print_r($like_user_info);die;
				}elseif(count($one_story_arr) == 1){
					$like_users = \App\User::where('id', @$one_story_arr[0])->select('full_name','image')->get();
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

			$following_query = \App\Follow::where('type', 1)->where('tag_id', $tag_info->id);
			$total_follow_str = $following_query->first();
			$following = $following_query->whereRaw("find_in_set('".$auth_id."',follow_by)")->count();
			
			$total_posts = Post::where('tag_id', $tag_info->id)->count();
			//echo '%%%%%%%: <pre>';print_r($total_posts);die;
			if($total_follow_str){
				//echo '<pre>';print_r($total_follow_str);die;
				$total_follow_users_id = explode(',', $total_follow_str->follow_by);
				$total_follow = count($total_follow_users_id);
			}else{
				$total_follow = 0;
				
			}
			//echo '<pre>';print_r($total_follow);die;
			return view('groups.dashboard', compact('stories', 'tags', 'like_user_info', 'tag_info', 'following', 'total_follow', 'total_posts'));
		}else{
			return redirect()->to('/')
							->with('error','Some error has occured');
		}	
	}
}
