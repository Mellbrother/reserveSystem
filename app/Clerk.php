<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clerk extends Model
{
    protected $guarded = arrya('id');

    public static $rules = arrya(
    	// idが存在しているかのcheck
    	// nameの制限
    	'user_id' => 'integer|required',
    	'name'    => 'string|required',
    );

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
