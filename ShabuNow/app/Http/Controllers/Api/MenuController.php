<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Menu::get();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Menu::find($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ตอนแรกคอมเม้นไว้ทำไมหว่า ขออนุญาต un comment นะ by pooh!?
       $request->validate([
           'name' => ['required', 'string', 'min:1'],
           'price' => ['required', 'integer', 'min:1'],
           'category' => ['required', 'string'],
           'description' => ['required', 'string', 'min:1'],
           'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
       ]);


        // Store image in 'public/images' folder


        // Search what category has the same name as selected
        $category = Category::where('name', $request->get('category'))->first();

        $menu = new Menu();

        $menu->name = $request->get('name');
        $menu->price = $request->get('price');
        $menu->category_id = $category->id;
        $menu->description = $request->get('description');
        $menu->status = 'available';
//        $menu->imgPath = $request->get('imgPath');

        if($request->file('imgPath') != null )
        {
            $imagePath = $request->file('imgPath')->store('foodImages', 'public');
            $menu->imgPath = $imagePath;
        }

        $menu->save();
        $menu->refresh();

        return $menu;
    }

    public function update(Request $request, Menu $menu)
    {
        if($request->get('name') != null)
        {
            $menu->name = $request->get('name');
        }
        if ($request->get('price') != null)
        {
            $menu->price = $request->get('price');
        }

        // fixed by pooh for chef update
        if($request->get('category') != null){
            $category = Category::where('name', $request->get('category'))->first();
            $menu->category_id = $category->id;
        }

        if ($request->get('description') != null)
        {
            $menu->description = $request->get('description');
        }
        if($request->get('status') != null)
        {
            $menu->status = $request->get('status');;
        }
//        if($request->get('imgPath') != null)
//        {
//            $menu->imgPath = $request->get('imgPath');
//        }
        if($request->file('imgPath') != null )
        {
            $imagePath = $request->file('imgPath')->store('foodImages', 'public');
            $menu->imgPath = $imagePath;
        }

        $menu->save();
        $menu->refresh();

        return $menu;
    }
}
