<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $fillable = ['title', 'content', 'user_id', 'status'];
    public function news_user(){
    	return $this->hasOne('App\User', 'id');
    }
}
