<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReportMail;
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

class AdminpostController extends Controller
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
            return view('adminposts/index',compact('tags', 'totalCount'))->with('i', (request()->input('page', 1) - 1) * $perpage);	
        }else{
            //$request['page'] = 1;
            $page=1;
            //$i = 0;
            $tags = $query1->get();
            return view('adminposts/index',compact('tags', 'totalCount', 'page','i'))->with('i', 0);	
        }
            
    }

		public function show(Tag $tag)
			{
				$thumbnail_path = url('/public/uploads/logo/thumbnail/');
				return view('adminposts.show',compact('vendor','thumbnail_path'));
			}
	
		protected function create(Request $request)
			{
				
				return view('adminposts.create');
			}
	
		public function edit($id)
			{
				
				$tag = Tag::find($id);
				//echo '<pre>';print_r($tag);die;
				return view('adminposts.edit',compact('tag'));
			}
	
	
		public function update($id, Request $request)
			{ 
				$tag = Tag::find($id);
				$tag->update($request->all());
				
				return redirect()->route('posts.index')
								->with('success','Tag updated successfully.');
			}
	
		
			public function destroy($id, Tag $tab)
			{
				$tag = Tag::find($id);
				$tag->delete();
				return redirect()->route('posts.index')
								->with('success','Tag deleted successfully.');
            }
}