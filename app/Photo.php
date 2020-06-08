<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $guarded= array('id');

    public static $rules = array(
      'shop_id' => 'integer|required',
      'photo' => 'string|required'
    );

    public function getData()
    {
        return $this->photo;
    }

}
