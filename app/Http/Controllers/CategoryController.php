<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use App\Category;
use DB;

class CategoryController extends Controller
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
        $query1 = \DB::table("categories")->where(function ($query) 
            {
                $searchparam = request()->input('search');
                    $query->where(\DB::raw("name"), 'like', '%' . $searchparam . '%');
            });
            
        $totalCount = \DB::table("categories")->count();
        //echo $totalCount;die;
		$page = request()->input('page');
		$query1->orderBy('id', 'DESC');	
        if($page != 'all'){
			$categories = $query1->paginate($perpage);
			//echo '<pre>';print_r($tags);die;
            return view('category/index',compact('categories', 'totalCount'))->with('i', (request()->input('page', 1) - 1) * $perpage);	
        }else{
            //$request['page'] = 1;
            $page=1;
            //$i = 0;
            $categories = $query1->get();
            return view('category/index',compact('categories', 'totalCount', 'page','i'))->with('i', 0);	
        }
            
    }

		public function show(Tag $tag)
			{
				$thumbnail_path = url('/public/uploads/logo/thumbnail/');
				return view('posts.show',compact('vendor','thumbnail_path'));
			}
	
		protected function create(Request $request)
			{
				
				return view('category.create');
			}
	
		public function edit($id)
			{
				
				$category = Category::find($id);
				//echo '<pre>';print_r($tag);die;
				return view('category.edit',compact('category'));
			}
	
	
		public function update($id, Request $request)
			{ 
				$category = Category::find($id);
				$category->update($request->all());
				
				return redirect()->route('categories.index')
								->with('success','Category updated successfully.');
			}
	
		public function store(Request $request)
			{
				
				request()->validate([
					'name' => 'required|string|unique:categories,name',
					
				]);	
				//echo '<pre>';print_r($request->all());die;
				//$request->offsetSet('status', 1);
				/*******username check*******/
					
				
				  $user = Category::create($request->all());
				 

				return redirect()->route('categories.index')
								->with('success','Category has been created successfully.');
			}
			public function destroy($id, Category $tab)
			{
				$tag = Category::find($id);
				$tag->delete();
				return redirect()->route('categories.index')
								->with('success','Category deleted successfully.');
			}
   
}
