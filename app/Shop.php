<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    protected $guarded = array('id');

    public static $rules = array(
      'name' => 'required'
    );

    public function scopeLunchMinPrice($query, $price){
      return $query->where('lunch_price', '>=', $price);
    }

    public function scopeLunchMaxPrice($query, $price){
      return $query->where('lunch_price', '<=', $price);
    }

    public function scopeDinnerMinPrice($query, $price){
      return $query->where('dinner_price', '>=', $price);
    }

    public function scopeDinnerMaxPrice($query, $price){
      return $query->where('dinner_price', '<=', $price);
    }

    public function scopeStation($query, $search_station){
      return $query->where('station', $search_station);
    }



    public function tags(){
      //belongsToManyの処理
      return $this->belongsToMany('App\Tag', 'shop_tag');
    }

    public function storePhotos()
    {
      return $this->hasMany('App\Photo');
    }
}
