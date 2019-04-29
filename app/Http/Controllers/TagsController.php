<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use App\Post;
use App\Tag;
use DB;

class TagsController extends Controller
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
        $perpage = 15;
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
            return view('tags/index',compact('tags', 'totalCount'))->with('i', (request()->input('page', 1) - 1) * $perpage);	
        }else{
            //$request['page'] = 1;
            $page=1;
            //$i = 0;
            $tags = $query1->get();
            return view('tags/index',compact('tags', 'totalCount', 'page','i'))->with('i', 0);	
        }
            
    }

		public function show(Tag $tag)
			{
				$thumbnail_path = url('/public/uploads/logo/thumbnail/');
				return view('tags.show',compact('vendor','thumbnail_path'));
			}
	
		protected function create(Request $request)
			{
				
				return view('tags.create');
			}
	
		public function edit($id)
			{
				
				$tag = Tag::find($id);
				//echo '<pre>';print_r($tag);die;
				return view('tags.edit',compact('tag'));
			}
	
	
		public function update($id, Request $request)
			{ 
				$tag = Tag::find($id);
				$tag->update($request->all());
				
				return redirect()->route('hashtags.index')
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
				 

				return redirect()->route('hashtags.index')
								->with('success','Tag has been created successfully.');
			}
			public function destroy($id, Tag $tab)
			{
				$tag = Tag::find($id);
				$tag->delete();
				return redirect()->route('hashtags.index')
								->with('success','Tag deleted successfully.');
			}
	public function tags(Request $request)
	{
		$tags_listing = Tag::where('status', 1)->with(['followInfo'])->orderBy('title', 'ASC')->get();

		//echo '<pre>';print_r($tags_listing);die;
		return view('tags.tags', compact('tags_listing'));
	}
   
}
