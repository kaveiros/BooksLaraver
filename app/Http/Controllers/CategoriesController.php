<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Category;

class CategoriesController extends Controller
{

    public function index() {
        $categories = Category::sortable(['name'])->paginate(4);
        return view ('pages.categories', compact('categories'));
    }

    public function store(Request $request) {

        $this->validate($request, [
            'category' => 'required' 
        ]);

        $category = new Category;
        $category->name = $request->input('category');
        $category->save();

        return redirect('/categories')->with('success', 'Category created');
    }

    public function create(Request $request) {
        $category = new Category;
        $category->name = $request->input('category');
        $category->save();
        return 123;
       // return view('pages.create-category');
       
    }

    public function show($id) {
        $category = Category::find($id);
        return view('pages.show', compact('category'));
    }

    public function edit($id) {
        $category = new Category();
        return view('pages.create-category', compact('category'));
    }
    // public function show(Category $category) {
        
    //     return view('pages.show', compact('category'));
    // }
}
