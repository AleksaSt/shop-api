<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopRequest;
use Illuminate\Http\Request;
use App\Shop;

class ShopsController extends Controller
{
    public function index(){
        return Shop::with('user')->paginate(2);
    }

    public function search($term){
        return Shop::with('user')->where('name', 'LIKE', '%' . $term . '%')->get();
    }

    public function store(ShopRequest $request){
        return Shop::create($request->all());
    }
}
