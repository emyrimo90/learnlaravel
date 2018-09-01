<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requet;
use Validator;
use Input;
use App\News;
use Cookie;
use Helper;

class NewsController extends Controller
{
    public function create(){
        dd(Cookie::get('name'));
        dd(Helper::userData()['name']);
        die();
    	$news = News::orderBy('id', 'DESC')->paginate(5);
    	//return response()->json(['success'=>true,'msg'=>'not found']);
    	return view('news.create', compact('news'));
    }
    public function store(Request $request){

    	$rules = [
    	'title'=>'required|min:2',
    	'content'=>'required'
    	];
    	$attributes = [
    		'title'=>'News Title'
    		];

        $this->validate($request,$rules);

    	// $validate = Validator::make($request->all(), $rules);
    	// $validate->setAttributeNames([
    	// 	'title'=> trans('admin.title')
    	// 	]);

    	// if($validate->fails()){
    	// 	return back()->withInput()->withErrors($validate);
    	// }
    	$new = News::create([
		    		'title'=>$request->title,
		    		'content'=> $request->content,
		    		'user_id'=>$request->user_id,
		    		'status'=> $request->status
		    		]);
    	//session()->put('message', 'hello world');
    	//session()->push('message', ['val'=>'hello world']);
    	$html = view('news.list_news', compact('new'))->render();
    	return response()->json(['success'=>true,'msg'=>$html]);
    }

    public function _check(){
       // $collection = collect(['a'=>1, 'b'=>2, 'c'=>3]);
        //return $collection->take(2);
        //$collection->chunk(5);
        $collection = News::all();
        return $collection->reject(function($item){
                return $item->status === 'approved';
            })->map(function($item){
                return ['title'=>$item->title];
            });
    }

    public function __check(){
       
        $collection = News::all();
        return $collection->map(function($item){
                if( $item->user_id === 1){
                    $item->status = 'approved';
                }
                return $item;
            });
    }

    public function check(){
       
        $collection = News::all();
        return $collection->map(function($item){
                
                return $item->only('title');
            });
    }

    public function cookieArray(){
        $name = 'lolo';
        Cookie::queue(Cookie::make('name', $name, 60));

        $cookie = Cookie::get('name');
        if($cookie != $name){
            Cookie::make('name', $name, 60);
        }
        
    }
}
