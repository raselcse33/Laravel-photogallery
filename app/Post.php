<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['imagename','image','description','cetagory_id','user_id','author_name'];

    public function cetagory()
    {
    	return $this->belongsTo('App\Category');
    }


    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
