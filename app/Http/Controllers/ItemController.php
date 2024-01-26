<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = Item::all();
        return view('pages.backend.item.index', compact('item'));
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('pages.backend.item.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:2048',
            'description' => 'required',
            'brand' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-item');
        }

        Item::create($validatedData);
        return redirect()->route('item.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('item.show', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $category = Category::all();
        return view('pages.backend.item.edit', compact('item', 'category'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:2048',
            'description' => 'required',
            'brand' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-item');
        } elseif ($request->oldImage) {
            $validatedData['image'] = $request->oldImage;
        }

        $item->update($validatedData);

        return redirect()->route('item.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        if ($item->image) {
            Storage::delete($item->image);
        }
        $item->delete();
        return redirect()->route('item.index');
    }
}
