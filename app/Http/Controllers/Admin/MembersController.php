<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    //
    public function index(Request $request){
//        $list = Member::all();
        return view('admin.member.list');
    }

    public function show($id){
        $member = Member::findOrFail($id);
        return view('admin.member.detail')->with(['member'=>$member]);
    }

    public function create(){
        return view('admin.member.add');
    }

    public function update(){

    }

    public function edit($id){
//        $member =
        return view('admin.member.edit');
    }

    public function destory(){

    }
}
