<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
    	// 存在しているidかcheck
    	// datetimeが未来の時間か
    	// datetimeの型
    	// people_numのmax
    	'customer_id' => 'integer|required',
    	'shop_id'    => 'integer|required',
    	'datetime'    => 'required',
    	'people_num'  => 'min:1|required',
    );
}
