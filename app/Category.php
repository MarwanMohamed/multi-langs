<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class Category extends Model
{
    use Translatable;

    protected $fillable = ['slug'];
    public $translatedAttributes = ['name'];

    public function posts(){
        return $this->hasMany('App\Post');
    }

}
