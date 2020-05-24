<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $guarded = arrya('id');

    public static $rules = arrya(
    	// 存在しているidかcheck
    	// datetimeが未来の時間か
    	// datetimeの型
    	// people_numのmax
    	'customer_id' => 'integer|required',
    	'clerk_id'    => 'integer|required',
    	'datetime'    => 'required',
    	'people_num'  => 'min:1|required',
    );
}
