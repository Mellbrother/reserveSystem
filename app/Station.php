<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $guarded= array('id');

      public static $rules = array(
        'station' => 'required'
      );

      public function getData()
      {
          return $this->station;
      }
}
