<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        return view ('category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category([
            'name'=> $request->get('name')
        ]);
        $category->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }


    public function update(Category $category)
    {
        $category->update($this->validateRequest());

        return redirect('category');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        Menu::where('category_id',$category->id)->delete();
        return back();
    }
    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
        ]);
    }
}
