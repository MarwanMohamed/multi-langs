<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
    	$cats = Category::orderBy('created_at', 'DECS')->paginate(10);
	  	return view('admin.categories.show', compact('cats'))->withTitle('Category');
    }

    public function create()
    {
    	return view('admin.categories.create')->withTitle('Add Category');
    }

    public function store(Request $request)
    {
		$this->validate($request, ['name.*'=> 'required']);     	
    	$category = new Category;
    	$category->slug = str_slug($request->name['en'], '_');
    	foreach ($request->name as $locale => $name) {
       		$category->translateOrNew($locale)->name = "{$name}";
    	}
    	$category->save();
    	return redirect('admin/categories')->with('message', 'Added Successfully');
    }

    public function edit($id)
    {
    	$category = Category::findOrFail($id);
    	return view('admin.categories.edit', compact('category'))->withTitle('Edit Category');
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, ['name.*'=> 'required']); 
    	$category = Category::findOrFail($id);
    	foreach ($request->name as $locale => $name) {
       		$category->translateOrNew($locale)->name = "{$name}";
    	}
    	$category->slug = str_slug($request->name['en'], '_');
    	$category->save();
    	return redirect('admin/categories')->with('message', 'Added Successfully');
    }

    public function destroy($id)
    {
    	Category::findOrFail($id)->delete();
    	return redirect('admin/categories')->with('message', 'Added Successfully');
    }
}
