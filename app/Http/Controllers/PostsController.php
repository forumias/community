<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Auth;
use Image;
use App\Post;
use App\Category;
use App\Tag;
use App\Follow;
use App\User;
use App\Comment;
use App\Subcomment;
use App\Polloption;
use DB;

class PostsController extends Controller
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
    public function dashboard(){
		$stories = Post::where('status', 1)->where('type', 1)->with(['userInfo'=>function($uqr){
			$uqr->select('id', 'name', 'full_name', 'image', 'about');
		}, 'commentInfo', 'likeInfo'=>function($qr){
			$qr->where('like_type', 0);
			$qr->select('post_id', 'user_ids', 'like_count');
		}])->orderBy('id', 'DESC')->get();
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
		//$stories->pluck('likeInfo.user_ids','likeInfo.post_id')->toArray()
		//echo '<pre>';print_r($like_user_info);die;
		$auth_id = @Auth::user()->id;
		$tag_followed = Follow::where('type', 1)->whereRaw("find_in_set('".$auth_id."',follow_by)")->with(['mytags'])->get();
		$users_tofollow = User::where('type', 2)->where('status', 1)->where('id', '!=', $auth_id)->with(['followInfo'=>function($subQuery) use ($auth_id) {	
			$subQuery->whereRaw("find_in_set('".$auth_id."',follow_by)");
			$subQuery->select('id', 'user_id');
		}])->limit(5)->get();

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
		$hot_discussions = Comment::select(DB::raw("COUNT(*) as count_row"), 'post_id')
						->with(['getPost'])
						->orderBy("count_row", 'DESC')
						->groupBy(DB::raw("post_id"))
						->limit(5)
						->get();
		//echo '<pre>';print_r($hot_discussions);die;
		return view('posts.dashboard', compact('stories', 'tags', 'tag_followed', 'users_tofollow', 'hot_discussions', 'like_user_info'));	
	}
	/*************************** */
	#Question tab
	#
	/*************************** */
	public function questions(){
			
	}
	/*************************** */
	#Polls tab
	#
	/*************************** */
	public function polls(){
			
	}
	/*************************** */
	#News tab
	#
	/*************************** */
	public function news(){
			
	}
	
    public function index() {
        $searchparam = request()->input('search');
        $perpage = 15;
        $query1 = \DB::table("posts")->where(function ($query) 
            {
                $searchparam = request()->input('search');
                    $query->where(\DB::raw("title"), 'like', '%' . $searchparam . '%');
            });
            
        $totalCount = \DB::table("posts")->count();
        //echo $totalCount;die;
		$page = request()->input('page');
		$query1->orderBy('id', 'DESC');	
        if($page != 'all'){
			$tags = $query1->paginate($perpage);
			//echo '<pre>';print_r($tags);die;
            return view('posts/index',compact('tags', 'totalCount'))->with('i', (request()->input('page', 1) - 1) * $perpage);	
        }else{
            //$request['page'] = 1;
            $page=1;
            //$i = 0;
            $tags = $query1->get();
            return view('posts/index',compact('tags', 'totalCount', 'page','i'))->with('i', 0);	
        }
            
    }

		public function show(Tag $tag)
			{
				$thumbnail_path = url('/public/uploads/logo/thumbnail/');
				return view('posts.show',compact('vendor','thumbnail_path'));
			}
	
		protected function create(Request $request)
			{
				
				return view('posts.create');
			}
	
		public function edit($id)
			{
				
				$tag = Tag::find($id);
				//echo '<pre>';print_r($tag);die;
				return view('posts.edit',compact('tag'));
			}
	
	
		public function update($id, Request $request)
			{ 
				$tag = Tag::find($id);
				$tag->update($request->all());
				
				return redirect()->route('posts.index')
								->with('success','Tag updated successfully.');
			}
	
		public function store(Request $request)
			{
				
				request()->validate([
					'title' => 'required',
					'description' => 'required',
					//'email' => 'required|string|unique:users,email',
					
				]);	
				//echo '<pre>';print_r($request->all());die;
				//$request->offsetSet('status', 1);
				/*******username check*******/
					
				
				  $user = Tag::create($request->all());
				 

				return redirect()->route('posts.index')
								->with('success','Tag has been created successfully.');
			}
			public function destroy($id, Tag $tab)
			{
				$tag = Tag::find($id);
				$tag->delete();
				return redirect()->route('posts.index')
								->with('success','Tag deleted successfully.');
			}
	public function ask_qus(Request $request)
	{
		$categories = \DB::table("categories")->select("categories.*")->orderBy('name', 'asc')->get();
		$tags = \DB::table("tags")->select("tags.*")->where('status', 1)->orderBy('title', 'asc')->get();
		$all_tags = array();
		foreach($tags as $tag){
				$temp_arr['id'] = $tag->id;
				$temp_arr['label'] = $tag->title;
				$temp_arr['value'] = $tag->title;
			array_push($all_tags, $temp_arr);
		}
		$all_tags = json_encode($all_tags);
		if ($request->isMethod('post')) {
			request()->validate([
				'title' => 'required',
				'description' => 'required',
				'category_id' => 'required',
				'tag_name' => 'required',
			]);
			if(!empty($request->tags)){
				$tag_str = implode(',',$request->tags);
			}else{
				$tag_str = '';
			}
			
			if($request->temp_tag != ''){
				$custom_tag = Tag::create([
                    'title' => $request->temp_tag,
                    'description' => '',
                    'status' => 1,
                    'created_by' => 1,
				 ]);
				 if($tag_str != ''){
					$tag_str = $tag_str.', '.$custom_tag->id;
				 }else{
					$tag_str = $custom_tag->id;
				 }
			}
			$category_id = implode(',',$request->category_id);
			//echo '<pre>';print_r($request->all());die;
			$request->offsetSet('user_id', 1);
			$request->offsetSet('status', 1);
			$request->offsetSet('tag_id', $tag_str);
			$request->offsetSet('category_id', $category_id);
			$user = Post::create($request->all());
			return Redirect::to('/askQuestion')->with('success','Question was created successfully.');
			
		}else{

		}
		
		return view('posts.askquestion',compact('categories', 'all_tags'));
	}
	public function user_story(Request $request)
	{
		$categories = \DB::table("categories")->select("categories.*")->orderBy('name', 'asc')->get();
		$tags = \DB::table("tags")->select("tags.*")->where('status', 1)->orderBy('title', 'asc')->get();
		$all_tags = array();
		foreach($tags as $tag){
				$temp_arr['id'] = $tag->id;
				$temp_arr['label'] = $tag->title;
				$temp_arr['value'] = $tag->title;
			array_push($all_tags, $temp_arr);
		}
		$all_tags = json_encode($all_tags);
		if ($request->isMethod('post')) {
			/*if($request->tag_name == ''){
				if($request->tags != ''){
					$tag_str = implode(',',$request->tags);
					$request->offsetSet('tag_name', $tag_str);
				}
			}*/
			request()->validate([
				'title' => 'required',
				'description' => 'required',
				'tag_name' => 'required',
				'file_upload'=> 'required'
			]);
			if(!empty($request->tags)){
				$tag_str = implode(',',$request->tags);
			}else{
				$tag_str = '';
			}
			
			if($request->temp_tag != ''){
				$custom_tag = Tag::create([
                    'title' => $request->temp_tag,
                    'description' => '',
                    'status' => 1,
                    'created_by' => 1,
				 ]);
				 if($tag_str != ''){
					$tag_str = $tag_str.', '.$custom_tag->id;
				 }else{
					$tag_str = $custom_tag->id;
				 }
			}
			//echo '<pre>';print_r($request->all());die;
			$user = auth()->user();	
			$request->offsetSet('user_id', $user->id);
			$request->offsetSet('status', 1);
			$request->offsetSet('type', 1);
			$request->offsetSet('tag_id', $tag_str);

			if(@$request->file_upload != ''){
				$ext_arr = array('JPEG','jpeg','PNG','png','GIF', 'gif', 'JPG', 'jpg');
				$file = $request->file('file_upload');
				//echo $file->getClientOriginalExtension();die;
				if (in_array($file->getClientOriginalExtension(), $ext_arr)){

				  $thumbnail_path = public_path('images/posts/thumb/');
				  $original_path = public_path('images/posts/original/');
				  $file_name = 'posts_'.'_'. $this->quickRandom(16) . '.' . $file->getClientOriginalExtension();
					Image::make($file)
						  /*->resize(261,null,function ($constraint) {
							$constraint->aspectRatio();
							 })*/
						  ->save($original_path . $file_name)
						  ->resize(90, 90)
						  ->save($thumbnail_path . $file_name);
					
						  $request->offsetSet('img', $file_name);
				//echo '<pre>';print_r($request->file('file_upload'));die;
				}else{
					return Redirect::to('/story')->with('error','Please upload jpeg, png, gif and jpg format only');
				}
			}

			$user = Post::create($request->all());
			return Redirect::to('/story')->with('success','Story was created successfully.');
			
		}else{

		}
		
		return view('posts.story',compact('categories', 'all_tags'));
	}
	
	public static function quickRandom($length = 16)
	{
		$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
	}
	public function detail(Request $request, $post_id = null){
		
		$id = convert_uudecode( base64_decode  ($post_id));
		$post_detail = Post::where('id', $id)->with(['userInfo'=>function($uqr){
			$uqr->select('id', 'name', 'full_name', 'image', 'about');
		}, 'likeInfo'=>function($qr){
			$qr->where('like_type', 0);
			$qr->select('post_id', 'user_ids', 'like_count');
		}])->first();
		//echo '%%%%%%%%%%: <pre>';print_r($post_detail);die;
		$like_user_info = array();
		$one_story_arr = array();
		if(@$post_detail->likeInfo->user_ids != ''){
			$one_story_arr = explode(',',$post_detail->likeInfo->user_ids);
			if(count($one_story_arr) > 1){
				$like_users = User::whereIn('id', $one_story_arr)->select('full_name','image')->limit(8)->get();
				$like_user_info['name'] = $like_users->pluck('full_name')->toArray();
				$like_user_info['img'] = $like_users->pluck('image')->toArray();
				
			}elseif(count($one_story_arr) == 1){
				$like_users = User::where('id', @$one_story_arr[0])->select('full_name','image')->get();
				$like_user_info['name'] = $like_users->pluck('full_name')->toArray();
				$like_user_info['img'] = $like_users->pluck('image')->toArray();
			}
		}
		//echo '<pre>';print_r($like_user_info);die;


		//------------------------
		$tag_idz  = $post_detail->tag_id;
		$tag_id_arr = explode(',', $tag_idz);
		$tags = array();
		$sub_comment_users_id = array();
		$final_sub_user = array();
		$auth_id = @Auth::user()->id;
		if(count($tag_id_arr) > 1){
			$tags = \DB::table("tags")->whereIn('id', $tag_id_arr)->pluck('title', 'id')->toArray();
		}elseif(count($tag_id_arr) == 1){
			$tags = \DB::table("tags")->where('id', $tag_id_arr[0])->pluck('title', 'id')->toArray();
		}
		$following = Follow::where('type', 2)->where('user_id', $post_detail->user_id)->whereRaw("find_in_set('".$auth_id."',follow_by)")->count();

		$comment_listing = Comment::where('post_id', $id)->with(['userInfo'=>function($subQuery) use ($auth_id) {	
			$subQuery->select('id', 'name', 'full_name', 'image');
		}, 'subCommentInfo'])->orderBy('id', 'DESC')->get();
		$comment_count = $comment_listing->count();
		
		foreach($comment_listing as $pp){
			$sub_comment_users_id = array_merge($sub_comment_users_id, $pp->subCommentInfo->pluck('user_id', 'id')->toArray());
		}
		$sub_comment_users_id = array_unique($sub_comment_users_id);
		if(count($sub_comment_users_id) > 1){
			$sub_comment_users = User::whereIn('id',$sub_comment_users_id)->select(['id','name', 'full_name', 'image'])->get()->toArray();
		}elseif(count($sub_comment_users_id) == 1){
			$sub_comment_users = User::where('id',@$sub_comment_users_id[0])->select(['id','name', 'full_name', 'image'])->get()->toArray();
		}else{
			$sub_comment_users = array();
		}
		foreach($sub_comment_users as $val){
			$id = $val['id'];
			$final_sub_user[$id] = $val;
		}

		//echo '%%%%%%%%%%: <pre>';print_r($final_sub_user);die;
		return view('posts.detail',compact('post_detail', 'tags', 'following', 'comment_listing', 'comment_count', 'final_sub_user', 'like_user_info'));
	}
	public function post_comment(Request $request){
		//echo '###<pre>';print_r($request->all());die;
		//echo convert_uudecode( base64_decode ($request->ksjdh));die;
		if($request->ksjdh != '' && $request->tjadh != ''){
			if($request->type == 1){
				$comment = Comment::create([
					'post_id' => convert_uudecode( base64_decode  ($request->ksjdh)),
					'user_id' => convert_uudecode( base64_decode  ($request->tjadh)),
					'description' => $request->comment_text,
				]);
			}else{
				$abc = 122222;
				$subcomment = Subcomment::create([
					'post_id' => convert_uudecode( base64_decode  ($request->ksjdh)),
					'user_id' => convert_uudecode( base64_decode  ($request->tjadh)),
					'comment_id' => $request->jhscmnt,
					'description' => $request->comment_text,
				]);
			}
			echo 'success';die;
		}else{
			echo 'error';die;
		}
	}
	public function create_poll(Request $request)
	{
		$tags = \DB::table("tags")->select("tags.*")->where('status', 1)->orderBy('title', 'asc')->get();
		$all_tags = array();
		foreach($tags as $tag){
				$temp_arr['id'] = $tag->id;
				$temp_arr['label'] = $tag->title;
				$temp_arr['value'] = $tag->title;
			array_push($all_tags, $temp_arr);
		}
		$all_tags = json_encode($all_tags);
		if ($request->isMethod('post')) {
			/*if($request->tag_name == ''){
				if($request->tags != ''){
					$tag_str = implode(',',$request->tags);
					$request->offsetSet('tag_name', $tag_str);
				}
			}*/
			//echo 'ppppppp: <pre>';print_r($request->all());die;
			request()->validate([
				'title' => 'required',
				'description' => 'required',
				'tag_name' => 'required'
			]);
			if(!empty($request->tags)){
				$tag_str = implode(',',$request->tags);
			}else{
				$tag_str = '';
			}
			
			if($request->temp_tag != ''){
				$custom_tag = Tag::create([
                    'title' => $request->temp_tag,
                    'description' => '',
                    'status' => 1,
                    'created_by' => 1,
				 ]);
				 if($tag_str != ''){
					$tag_str = $tag_str.', '.$custom_tag->id;
				 }else{
					$tag_str = $custom_tag->id;
				 }
			}
			//echo '<pre>';print_r($request->all());die;
			$user = auth()->user();	
			$request->offsetSet('user_id', $user->id);
			$request->offsetSet('status', 1);
			$request->offsetSet('type', 2);
			$request->offsetSet('tag_id', $tag_str);

			$result = Post::create($request->all());
			if(!empty($request->option)){
				foreach($request->option as $one_opt){
					$polloption = Polloption::create([
							'post_id' => $result->id,
							'user_id' => $user->id,
							'name' => $one_opt,
							'counts' => 0,
						]);
				}
			}
			return Redirect::to('/createPoll')->with('success','Poll was created successfully.');
			
		}else{

		}
		
		return view('posts.create_poll',compact('all_tags'));
	}

	public function create_news(Request $request)
	{
		$tags = \DB::table("tags")->select("tags.*")->where('status', 1)->orderBy('title', 'asc')->get();
		$all_tags = array();
		foreach($tags as $tag){
				$temp_arr['id'] = $tag->id;
				$temp_arr['label'] = $tag->title;
				$temp_arr['value'] = $tag->title;
			array_push($all_tags, $temp_arr);
		}
		$all_tags = json_encode($all_tags);
		if ($request->isMethod('post')) {
			request()->validate([
				'title' => 'required',
				'description' => 'required',
				'tag_name' => 'required'
			]);
			if(!empty($request->tags)){
				$tag_str = implode(',',$request->tags);
			}else{
				$tag_str = '';
			}
			
			if($request->temp_tag != ''){
				$custom_tag = Tag::create([
                    'title' => $request->temp_tag,
                    'description' => '',
                    'status' => 1,
                    'created_by' => 1,
				 ]);
				 if($tag_str != ''){
					$tag_str = $tag_str.', '.$custom_tag->id;
				 }else{
					$tag_str = $custom_tag->id;
				 }
			}
			//echo '<pre>';print_r($request->all());die;
			$user = auth()->user();	
			$request->offsetSet('user_id', $user->id);
			$request->offsetSet('status', 1);
			$request->offsetSet('type', 3);
			$request->offsetSet('tag_id', $tag_str);

			$result = Post::create($request->all());
		
			return Redirect::to('/createNews')->with('success','News was created successfully.');
			
		}else{

		}
		
		return view('posts.create_news',compact('all_tags'));
	}
	public function delete_action(Request $request){
			switch (@$request->cmnType) {
				case 1:
						$deletedRows = Post::where('id', $request->cmnid)->delete();
						$deletedCmnt = Comment::where('post_id', $request->cmnid)->delete();
						$deletedSubCmnt = Subcomment::where('post_id', $request->cmnid)->delete();
						$delete_like = \App\Like::where('post_id', $request->cmnid)->delete();
						return Redirect::to('/')->with('success','Post was deleted successfully.');
						break;
				case 2:
						$deletedCmnt = Comment::where('id', $request->cmnid)->delete();
						$deletedSubCmnt = Subcomment::where('comment_id', $request->cmnid)->delete();
						return back()->with('success','Comment was deleted successfully.');
						break;
				case 3:
						$deletedSubCmnt = Subcomment::where('id', $request->cmnid)->delete();
						return back()->with('success','Reply was deleted successfully.');
						break;
				default:
						return back()->with('error','Somthing went wrong, please try again later.');
			}
	}
	public function like_unlike(Request $request){
		//echo '<pre>';print_r($request->all());die;
		$auth_id = @Auth::user()->id;
        if(@$auth_id != ''){
			$post_id = convert_uudecode( base64_decode  ($request->pyfdhh));
            if($request->data_case == 1){ // for post like and unlike
                $like_info = \App\Like::where('post_id',$post_id )->where('like_type', 0)->first();
            }else{ // for other future implementation
                echo 'act_err';die;
			}
			//echo '<pre>';print_r($like_info);die;
            if($like_info){
                if($like_info->user_ids != ''){
                    $like_arr = explode(',',$like_info->user_ids);
                    if(in_array($auth_id, $like_arr)){
                        $pos = array_search($auth_id, $like_arr);
						unset($like_arr[$pos]);
						$like_count = count($like_arr);
                        $like_str = implode(',',$like_arr);
                    }else{
						array_push($like_arr, $auth_id);
						$like_count = count($like_arr);
                        $like_str = implode(',',$like_arr);
                    }
                    $like_info->update(['user_ids'=> $like_str, 'like_count'=> $like_count]);
                }else{
                    $like_info->update(['user_ids'=> $auth_id, 'like_count'=> 1]);
                }
                $flag = 'success';
            }else{
                if($request->data_case == 1){
                    $like_status = \App\Like::create([
                        'like_type' => 0,
                        'post_id' => $post_id,
						'user_ids'=> $auth_id,
						'like_count' => 1
					]);
					$flag = 'success';
                }else{
                    $flag = 'act_err';
                }
			}
			echo $flag;die;
        }else{
            echo 'log_err';die;
        }
	}

	//function to get the user listing for the post likes
	public function user_likes(Request $request){
		$post_id = $request->pjhfd;
		$data_str = '';
		if($post_id != ''){
			$like_user = \DB::table("likes")
						->select("users.id","users.full_name", "users.image")
						->leftjoin("users",\DB::raw("FIND_IN_SET(users.id,likes.user_ids)"),">",\DB::raw("'0'"))
						->where('post_id',$post_id)
						->where('like_type',0)
						->get();
			
			foreach($like_user as $one_user){
				$data_str .= '<a href="javascript:void(0);" class="list-group-item"> <span> <img class="circle_img" src="'.$one_user->image. '" alt="" height="25" width="25"> </span> '.$one_user->full_name.' </a>';
			}
		}else{
			$data_str = 'error';
		}
		return $data_str;
	}

	public function get_post(Request $request){
		$stories = Post::where('status', 1)->where('type', 1)->with(['userInfo'=>function($uqr){
			$uqr->select('id', 'name', 'full_name', 'image', 'about');
		}, 'commentInfo', 'likeInfo'=>function($qr){
			$qr->where('like_type', 0);
			$qr->select('post_id', 'user_ids', 'like_count');
		}])->orderBy('id', 'DESC')->get();
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
		//$stories->pluck('likeInfo.user_ids','likeInfo.post_id')->toArray()
		//echo '<pre>';print_r($like_user_info);die;
		$auth_id = @Auth::user()->id;
		$tag_followed = Follow::where('type', 1)->whereRaw("find_in_set('".$auth_id."',follow_by)")->with(['mytags'])->get();
		$users_tofollow = User::where('type', 2)->where('status', 1)->where('id', '!=', $auth_id)->with(['followInfo'=>function($subQuery) use ($auth_id) {	
			$subQuery->whereRaw("find_in_set('".$auth_id."',follow_by)");
			$subQuery->select('id', 'user_id');
		}])->limit(5)->get();

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
		$hot_discussions = Comment::select(DB::raw("COUNT(*) as count_row"), 'post_id')
						->with(['getPost'])
						->orderBy("count_row", 'DESC')
						->groupBy(DB::raw("post_id"))
						->limit(5)
						->get();
		//echo '<pre>';print_r($hot_discussions);die;
		return view('Elements.posts.ajax_element', compact('stories', 'tags', 'tag_followed', 'users_tofollow', 'hot_discussions', 'like_user_info'));
	}
   
}
