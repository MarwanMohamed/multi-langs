<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class Post extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'description'];

    public function category() {
    	return $this->belongsTo('App\Category','cat_id');
    }
}
