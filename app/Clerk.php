<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clerk extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
    	// idが存在しているかのcheck
    	// nameの制限
    	'user_id' => 'integer|required',
    	'name'    => 'string|required',
    );

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function shop()
    {
        return $this->hasOne('App\Shop');
    }
}
