<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends Controller
{
    //
    /**
     *
     * 上传图片插件
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     *
     */
    public function upload(Request $request){

        $file = $request->file('ad_img');
        $arr = ['error'=>1];
        if($file->isFile()){
            $target = "/upload";
            $filename = time()*1000+rand(0,9999);
            $flag = move_uploaded_file($file,$target."/".$filename);
            if(!$flag){
                $arr['error'] = 2;
            }else{
                $image = new Image();
                $image->image_url = $target."/".$filename;
                $image->save();
                $id = $image->id;
                $arr['id'] = $id;
            }

        }
        return response()->json($arr);
    }
}
