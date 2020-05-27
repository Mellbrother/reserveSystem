<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Clerk extends Authenticatable
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
