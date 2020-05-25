<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function scopeLunchMinPrice($query, $n){
      return $query->where('lunch_price', '>=', $n);
    }

    public function scopeLunchMaxPrice($query, $n){
      return $query->where('lunch_price', '<=', $n);
    }

    public function scopeDinnerMinPrice($query, $n){
      return $query->where('dinner_price', '>=', $n);
    }

    public function scopeDinnerMaxPrice($query, $n){
      return $query->where('dinner_price', '<=', $n);
    }

    public function scopeStation($query, $n){
      return $query->where('station', $n);
    }

    public function tags(){
      //belongsToManyの処理
      return $this->belongsToMany('App\Tag', 'shop_tag', 'tag_id', 'shop_id')
    }
}
