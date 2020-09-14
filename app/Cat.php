<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
protected $fillable = ['id','name','image'];
    public function products(){
      return  $this->hasMany(Product::class);
    }
}
