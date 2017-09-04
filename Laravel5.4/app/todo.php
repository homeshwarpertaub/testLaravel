<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    //capitalize values only on webpage
    public function getBodyAttribute($value)
    {
        return ucfirst($value);
    }

    /* public function getTitleAttribute($value){
    return ucfirst($value);
    } */

//capitalize values when inserted in database
    public function setBodyAttribute($value){
        return $this ->attributes['body'] = ucfirst($value);
    }
}
