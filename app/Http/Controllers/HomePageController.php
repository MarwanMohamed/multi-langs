<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Post;

class HomePageController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('created_at', 'DESC')->paginate(12);
    	return view('site.index', compact('cats', 'posts'));
    }

    public function category($category)
    {
    	$category = Category::where('slug', $category)->first();
    	$posts = Post::where('cat_id', $category->id)->paginate(10);
    	return view('site.category', compact('category', 'posts'));
    }
}
