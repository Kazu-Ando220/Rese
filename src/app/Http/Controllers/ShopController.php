<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        $areas = Area::all();
        $genres = Genre::all();
        $images = Shop::select('image_url')->get();
        return view('index',compact('shops','areas','genres','images'));
    }
}
