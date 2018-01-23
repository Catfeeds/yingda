<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    //
    public function adPosition(){
        return $this->belongsTo('App\Models\AdPostion','ad_position_id');
    }

}
