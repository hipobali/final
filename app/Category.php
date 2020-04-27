<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      protected $fillable = ['name'];

      public function foundation(){
         return $this->hasMany('App\Foundation','id');
      }

       public function foundationPost(){
        return $this->hasMany('App\foundationPost','id');
    }
}
