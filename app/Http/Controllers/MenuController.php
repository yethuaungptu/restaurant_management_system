<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();

        return view('menus.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $menu = new Menu();
        return view ('menus.create',compact('categories','menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = Menu::create($this->validateRequest());

        $menu->save();

        return redirect('menus')->with('success', 'Menus inserted!');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('menus.edit',compact('menu','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Menu $menu)
    {
        $menu->update($this->validateRequest());

        return redirect('menus/')->with('success', 'Menus updated!');
    }


    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect('menus')->with('success', 'Menus deleted!');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'count' => 'required|numeric',
            'category_id' => 'required'
        ]);
    }
}
