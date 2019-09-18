<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
    	//return view('welcome');
    	/*return Post::where([
    		'status' => 'PUBLISHED',
    		'category_id' => 1
    	])->orderBy('id', 'DESC')->paginate(10);*/
        
        //$slider_post = Post::where('status', 'PUBLISHED')->inRandomOrder()->limit(4)->with('category')->get();
        
        $slider_post = Post::where([
            'status' => 'PUBLISHED',

        ])->orderBy('id', 'DESC')->limit(4)->with('category')->get();
    	
        $posts = Post::where('status', 'PUBLISHED')->orderBy('id', 'DESC')->with('category')->paginate(12);

        $news_post = Post::where([
            'status' => 'PUBLISHED',
            'category_id' => 1
        ])->orderBy('id', 'DESC')->limit(6)->with('category')->get();

        $lifestyle_post = Post::where([
            'status' => 'PUBLISHED',
            'category_id' => 3
        ])->orderBy('id', 'DESC')->limit(6)->with('category')->get();

        $food_post = Post::where([
            'status' => 'PUBLISHED',
            'category_id' => 7
        ])->orderBy('id', 'DESC')->limit(6)->with('category')->get();

    	$tech_post = Post::where([
    		'status' => 'PUBLISHED',
    		'category_id' => 4
    	])->inRandomOrder()->limit(3)->with('category')->get();

    	$editor_pick = Post::where('status', 'PUBLISHED')->inRandomOrder()->limit(5)->with('category')->get();

    	return view('welcome')->with('posts', $posts)->with('editor_pick', $editor_pick)->with('tech_post', $tech_post)->with('news_post', $news_post)->with('lifestyle_post', $lifestyle_post)->with('food_post', $food_post)->with('slider_post', $slider_post);
    }

    public function show($slug)
    {
    	$post = Post::where('slug', $slug)->get();
    	
    	$popular_post = Post::where('status', 'PUBLISHED')->inRandomOrder()->limit(4)->get();

    	$latest_post = Post::where('status', 'PUBLISHED')->orderBy('id', 'DESC')->limit(4)->get();
    	

    	return view('single-article')->with('post', $post)->with('popular_post', $popular_post)->with('latest_post', $latest_post);
    }

    public function test()
    {
        
        $post = Post::where('status', 1)->with('category')->get();
        return $post[0]->category;
    }

    public function search(Request $request)
    {
         $query = $request->input('query');
         $posts = Post::where('title','LIKE','%'.$query.'%')->orWhere('body','LIKE','%'.$query.'%')->orderBy('id', 'desc')->with('category')->paginate(10);
         return view('search')->with('posts', $posts)->with('query', $query);
    }

    public function indexCategory($category_slug)
    {
        $category = Category::where('slug', $category_slug)->limit(1)->get();
        $posts = Post::where('category_id', $category[0]->id)->orderBy('id', 'desc')->with('category')->paginate(10);
        
        return view('category')->with('posts', $posts)->with('category', $category);
    }
}
