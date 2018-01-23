<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CouponsController extends Controller
{
    //
    public function store(Request $request){
        $coupon = new Coupon();
        $coupon->coupon_name = $request->coupon_name;
        $coupon->coupon_type = $request->coupon_type;
       $coupon->save();
    }
    public function index(){
        $psize = 15;
        $list = Coupon::where('status',1)->paginate($psize);
        return view('admin.coupon.index')->with(['list'=>$list]);
    }
    public function create(){
        return view('admin.coupon.add');
    }
    public function edit($id){
        $coupon = Coupon::findOrFail($id);
        return view('admin.coupon.edit')->with(['coupon'=>$coupon]);
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(),[
            'coupon_name'=>'string|required',
            'coupon_type'=>'integer|required',
            'user_id'=>'integer|required',
            'shop_id'=>'integer|required',
            'shop_name'=>'string|required',
            'coupon_content'=>'string|required',
            'deadline'=>'date|required',
            'id'=>'integer|required',
        ]);
        if($validator->fail()){
            return reponse()->json(['error'=>1,'errmsg'=>$validator->first()->messages()]);
        }
        $coupon = Coupon::findOrFail($request->id);
        $coupon->coupon_name = $request->coupon_name;
        $coupon->coupon_type = $request->coupon_type;
        $coupon->user_id = $request->user_id;
        $coupon->shop_id = $request->shop_id;
        $coupon->shop_name = $request->shop_name;
        $coupon->coupon_content = $request->coupon_content;
        $coupon->deadline = $request->deadline;
        $coupon->coupon_content = $request->coupon_content;
        $coupon->save();
        return response()->json(['error'=>0]);
    }
    public function destroy(){

    }
}
