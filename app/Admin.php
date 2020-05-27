<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'user_id' => 'integer|required',
        'name' => 'string|required',
    );

}
