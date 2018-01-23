<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ad;
use App\Models\Adposition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdsController extends Controller
{
    //
    public function index(){
        $list = Ad::all();
        return view('admin.banner.banner-list')->with(['list'=>$list]);
    }

    public function create(){
        $AdPosition = Adposition::all();
        return view('admin.banner.banner-add')->with(['list'=>$AdPosition]);
    }

    public function show($id){
        $ad = Ad::findOrFail($id);
        return view('admin.banner.edit')->with(['ad'=>$ad]);
    }

    public function destory(){

    }

    public function update(Request $request,$id){
        $ad  = Ad::findOrFail($id);
        $ad->ad_name = $request->ad_name;
        $ad->ad_position_id = $request->ad_position_id;
        $ad->ad_link = $request->ad_link;
        $ad->ad_img_url = $request->ad_img_url;
        $ad->ad_description = $request->ad_description;
        $ad->save();
        return reponse()->json(['errno'=>0]);
    }

    public function edit($id){
        $ad = Ad::findOrFail($id);
        return view(['admin.banner.edit'])->with(['ad'=>$ad]);
    }
}
