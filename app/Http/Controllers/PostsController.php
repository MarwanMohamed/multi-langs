<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Post;

class PostsController extends Controller
{
	public function index()
	{
		$posts = Post::orderBy('created_at', 'DECS')->paginate(10);
    	return view('admin.posts.show', compact('posts'))->withTitle('Posts');
	}

    public function create()
    {
    	$categories = Category::all();
    	return view('admin.posts.create', compact('categories'))->withTitle('Add Post');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title.*' => 'required', 'description.*' => 'required',
            'image' => 'required',
            'category' => 'required'
    	]);

    	$post = new Post;
    	$photo = $request->image;
        $path = 'img/uploades';
        $name = rand(1,9999999) .'_'. $photo->getClientOriginalName();
        $photo->move($path, $name);
        $post->image = $name;
        $post->cat_id = $request->category;

    	foreach ($request->title as $locale => $title) {
       		$post->translateOrNew($locale)->title = "{$title}";
    	}
    	foreach ($request->description as $locale => $description) {
       		$post->translateOrNew($locale)->description = "{$description}";
    	}
    	$post->save();
    	return redirect('admin/posts')->with('message', 'Added Successfully');     	
    }

    public function edit($id)
    {
    	$post = Post::findOrFail($id);
    	$categories = Category::all();
    	return view('admin.posts.edit', compact('post', 'categories'))->withTitle('Edit Post');
    }

    public function update(Request $request, $id)
    {
		$this->validate($request, [
    		'title.*' => 'required', 'description.*' => 'required',
            'category' => 'required'
    	]);
    	$post = Post::findOrFail($id);
		$photo = $request->image;
    	if ($photo != null) {
    		if(file_exists('img/uploades/'.$post->image)) {
            	unlink('img/uploades/'.$post->image);
        	} 
	        $path = 'img/uploades';
	        $name = date('Y_m_d') .'_'. time() .'_' . $photo->getClientOriginalName();
	        $photo->move($path, $name);
	        $post->image = $name;
    	}
        $post->cat_id = $request->category;

    	foreach ($request->title as $locale => $title) {
       		$post->translateOrNew($locale)->title = "{$title}";
    	}
    	foreach ($request->description as $locale => $description) {
       		$post->translateOrNew($locale)->description = "{$description}";
    	}
    	$post->save();
    	return redirect('admin/posts')->with('message', 'Edit Successfully');     	
    }

    public function destroy($id)
    {
    	$post = Post::findOrFail($id);
    	if(file_exists('img/uploades/'.$post->image)) {
            unlink('img/uploades/'.$post->image);
        } 
        $post->delete();
        return redirect('admin/posts')->with('message', 'Deleted Successfully');     	
    }
}
