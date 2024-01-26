<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $item = Item::all();
        return view('pages.frontend.post', compact('item'));
        //
    }
}