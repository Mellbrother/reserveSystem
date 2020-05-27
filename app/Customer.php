<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    protected $guraded = array('id');

    public static $rules = array(
        'user_id' => 'integer|required',
        'name' => 'string|require',
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
