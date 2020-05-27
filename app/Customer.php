<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guraded = array('id');

    public static $rules = array(
        'user_id' => 'integer|required',
        'name' => 'string|require',
    );

}
