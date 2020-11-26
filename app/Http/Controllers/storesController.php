<?php

namespace App\Http\Controllers;
use App\Store;
use Illuminate\Http\Request;

class storesController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view ('stores.index',compact('stores'));
    }
}
