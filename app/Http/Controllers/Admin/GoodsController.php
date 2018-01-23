<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    //
    /**
     * 商品，增删改查
     */
    public function index(){
        $goods = Good::all();

    }

    public function create(){
        return view("admin.good.add");
    }

    public function show($id){
        $goods = Good::findOrFail($id);
        return view('admin.good.detail');
    }
}
