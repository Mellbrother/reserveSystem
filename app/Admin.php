<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    protected $guarded = array('id');

    public static $rules = array(
        'user_id' => 'integer|required',
        'name' => 'string|required',
    );

    public function getData()
    {
        return $this->belongsTo('App\User');
    }
}
