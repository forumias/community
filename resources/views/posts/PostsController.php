<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Image;
use App\Post;
use App\Category;
use App\Tag;
use DB;

class PostsController extends Controller
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
    public function dashboard(){
		$stories = Post::where('status', 1)->where('type', 2)->orderBy('id', 'DESC')->get();
		$questions = Post::where('status', 1)->where('type', 1)->orderBy('id', 'DESC')->get();
		//echo '<pre>';print_r($posts);die;
		return view('posts.dashboard', compact('stories', 'questions'));	
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
		$tags = \DB::table("tags")->select("tags.*")->orderBy('title', 'asc')->get();
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
			
			if($tag_str == ''){
				$tag_str = $request->temp_tag;
			}
			$category_id = implode(',',$request->category_id);
			//echo '<pre>';print_r($request->all());die;
			$request->offsetSet('user_id', 1);
			$request->offsetSet('status', 1);
			$request->offsetSet('tag_name', $tag_str);
			$request->offsetSet('category_id', $category_id);
			$user = Post::create($request->all());
			return Redirect::to('/askQuestion')->with('success','Question was created successfully.');
			
		}else{

		}
		
		return view('posts.askquestion',compact('categories', 'tags'));
	}
	public function user_story(Request $request)
	{
		$categories = \DB::table("categories")->select("categories.*")->orderBy('name', 'asc')->get();
		$tags = \DB::table("tags")->select("tags.*")->orderBy('title', 'asc')->get();
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
			
			if($tag_str == ''){
				$tag_str = $request->temp_tag;
			}
			//echo '<pre>';print_r($request->all());die;
			$request->offsetSet('user_id', 1);
			$request->offsetSet('status', 1);
			$request->offsetSet('tag_name', $tag_str);

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
		
		return view('posts.story',compact('categories', 'tags'));
	}
	public function get_tags(){
		$searchparam = @$_REQUEST['tag_val'];
		$tags = \DB::table("tags")->Where('title', 'like', '%' . $searchparam . '%')->select("tags.*")->orderBy('title', 'asc')->pluck('title')->toArray();
		if(empty($tags)){
			array_push($tags, $searchparam);
		}
		//echo '<pre>';print_r($tags);die;
		echo json_encode( $tags);die;
	}
	public static function quickRandom($length = 16)
	{
		$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
	}

	
   
}
