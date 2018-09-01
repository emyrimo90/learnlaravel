<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PostController extends Controller
{
    public function index(){
    	$news = News::orderBy('id', 'DESC')->paginate(5);
    	return view('posts.index', compact('news'));
    }

    public function store(){
    	echo 'jjj';
    }
}
