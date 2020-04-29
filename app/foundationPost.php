<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foundationPost extends Model
{

    public  function  foundation(){
        return $this->belongsTo('App\Foundation');
    }
   
    public function category(){
        return $this->belongsTo('App\Category','f_post_category');
    }
    public function userPost(){
        return $this->belongsTo('App\userPost');
    }
    public  function  user(){
        return $this->belongsTo('App\User');
    }
}
