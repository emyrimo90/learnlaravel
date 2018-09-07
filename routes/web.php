<?php

use App\Jobs\SendEmailJob;
use App\Events\TaskEvent;
use App\Notifications\TaskCompleted;
use App\Notifications\Normal;
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
	//return view('welcome');
  $client = new GuzzleHttp\Client();
  $res = $client->get('https://api.github.com/user', ['auth' =>  ['emyrimo90', 'ahlam@0169590837']]);
  //echo $res->getStatusCode(); // 200
  echo $res->getBody(); 
});


Route::get('/kawa3b',function(){
  /*$client = new GuzzleHttp\Client();
        $res = $client->post('https://kawa3b.com/webservices/list_of_service_category', [
                'lang' => 'en',
                //'secret' => 'test_secret',
        ]);
        //echo $res->getStatusCode();
        // "200"
        //echo $res->getHeader('content-type');
        // 'application/json; charset=utf8'
        echo $res->getBody();
        // {"type":"User"...'*/
        /*$client = new GuzzleHttp\Client();
        $response = $client->request('POST', 'http://httpbin.org/post', [
            'form_params' => [
                'field_name' => 'abc',
                'other_field' => '123',
                'nested_field' => [
                    'nested' => 'hello'
                ]
            ]
        ]);

        echo $response->getBody();*/

        /*$client = new GuzzleHttp\Client();

        $response = $client->request('POST', 'http://kawa3b.com/webservices/get_all_offer_list',[
                 'form_params' =>[
                 "lang"=>"en",
                 ]
                 ,
                'headers'=>[
                     'Content-Type'=>'application/x-www-form-urlencoded'
                ]
          ]);

        echo $response->getBody();*/

        /*$client = new GuzzleHttp\Client();

        $response = $client->request('POST', 'http://kawa3b.com/webservices/get_all_offer_list',[
                'form_params' => [
                  'lang' =>'en',
                 ],
                'headers'=>[
                     'Content-Type'=>'application/x-www-form-urlencoded',
                     "Accept"=>'application/json',
                ]
          ]);

        echo $response->getBody();*/

         /*$client = new GuzzleHttp\Client();

        $response = $client->request('POST', 'http://aldahayanautosa.com/aldahyan/oauth/token',[
                 'form_params' =>[
                 "grant_type"=>"password",
                 "client_id"=>"2",
                 "client_secret"=>"G3RYH2aOWloclC9wmOcuCjNojdCpzA1HNa8dVzMl",
                 "username"=>"info@itroots.net",
                 "password"=>"itroots@1"
                 ]
                 ,
                'headers'=>[
                     'Content-Type'=>'application/x-www-form-urlencoded'
                ]
          ]);

        echo $response->getBody();*/


        /*$client = new GuzzleHttp\Client();

        $response = $client->request('POST', 'http://aldahayanautosa.com/aldahyan/api/getCarById',[
                 'form_params' =>[
                     'id'=>10
                 ]
                 ,
                'headers'=>[
                     'Content-Type'=>'application/x-www-form-urlencoded',
                     'Authorization'=>'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjQzYzdkMzAzY2NmMWI1NTdmMWM2Mjk5N2NhNWUxODY2NTYyNWIwNjFhOTE1Y2E4NzViYjA1ZGZiOGY2N2JkZGQ5NDJiYTcxMGIzMjkzMmMyIn0.eyJhdWQiOiIyIiwianRpIjoiNDNjN2QzMDNjY2YxYjU1N2YxYzYyOTk3Y2E1ZTE4NjY1NjI1YjA2MWE5MTVjYTg3NWJiMDVkZmI4ZjY3YmRkZDk0MmJhNzEwYjMyOTMyYzIiLCJpYXQiOjE1MzU3MDg2OTYsIm5iZiI6MTUzNTcwODY5NiwiZXhwIjoxNTM1NzEyMjk2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.PJVK8HlmhVD_SsC1sDBQ8LSijkBUzjU2JRVdbCRf6H0FMZvYi9oDSTUiPA74-KOMq1wuabjc4F75sA2BDCaliqMQKwX-Fo2g6rN8d2xWqigjgSFvxgAgVf3XrulEWiyI_jiXIQ8pJH7_eWOZUXgsNny7Lt683zEf11bnvbSjJ_El0BGfMJox8kanpLCbDCiJR-ZNtn1M1B-9xAvPXaYTc1c0jDorvA8Iv9TfnjEdaUDlXA0R4Miiu867zucKKd1v-C89YBSUdDhNXStUNbGEwO25gVYrbLO1Jn0RrlAFr3lJzV9RKP0qiDSY29ijsuErZWnOv8QO3LOTOoZrxw2JZEOtKMBn1GYF3VwC9ZVulsYCDRrDVYTckLew02I_4uPYZV5BS-usOUWsX0TXTA2bq3Xd25yHx8wcdrhga8Me6dXux-VqTWnYUJj-4clWGrV4nCjbnWW-1WsIPH8LWmQoh_4mqwI02yaks-ZYAJZJft_CNdakrZdfySVoVI9bWl9olyJxjUIuTgxzhkyXGYn2VG0JfEzxhDDrZOGdEgebzlcWWTD27VpG2WrN4alTCBz-knH0_Hvt4OloAWgAibjavFcWhGhkkcRtuUAmos3GCEuZgbNMmi9NNalgY8vZKtYdhIU1Ga0A_1Nngrrx_WnZ7xyu49qJlIqqMuvxc1pzt-o'
                ]
          ]);
        $data = json_decode($response->getBody());
        return view('lolo', compact('data'));*/

        $client = new GuzzleHttp\Client();

        $response = $client->request('POST', 'https://kawa3b.com/webservices/list_of_service_category',[
                 'form_params' =>[
                   'lang'=>'en',
                   'category'=>1,
                   'type'=>1,
                 ]
                 ,
                'headers'=>[
                     'Content-Type'=>'application/x-www-form-urlencoded',
                ]
          ]);
        echo $response->getBody();
        die();
        $data = json_decode($response->getBody());
        return view('lolo', compact('data'));
        
});



/*public function saveApiData()
    {
        $client = new Client();
        $res = $client->request('POST', 'https://url_to_the_api', [
            'form_params' => [
                'client_id' => 'test_id',
                'secret' => 'test_secret',
            ]
        ]);
        echo $res->getStatusCode();
        // "200"
        echo $res->getHeader('content-type');
        // 'application/json; charset=utf8'
        echo $res->getBody();
        // {"type":"User"...'
}*/

Route::get('/user/{id?}', function($id=null){
  echo 'welcome back geek '. $id;
})->where('id', '[0-9]+');


Route::get('/news', 'NewsController@create');
Route::post('/news', 'NewsController@store');

Route::get('/check', 'NewsController@check');

Route::get('/locale/{lang?}', function($lang=null){
      App::setlocale($lang);
      return view('language');
});

Route::get('sendMail', function(){
	dispatch(new SendEmailJob) ->delay(now()->addMinutes(1));
	return 'email send successfully';
});


//event

Route::get('/event', function(){
	event(new TaskEvent('hello every body!'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('notify', function(){
	$user = App\User::find(1);
    //App\User::find(1)->notify(new TaskCompleted);
    //Notification::send($user, new TaskCompleted());
    Notification::route('mail', 'taylor@example.com')
            ->notify(new TaskCompleted($user));
});
Route::get('notifyDatabase', function(){
  $user = App\User::find(1);
    App\User::find(1)->notify(new Normal);
});

Route::group(['middleware'=>'visitor'], function(){
  Route::get('/log', function(){
    echo "you must login";
  });
});


Route::group(['middleware'=>'admin'], function(){
  Route::get('/go', function(){
    echo "login welcome,". session()->get('data')['name'];
  });

  Route::get('/logou', function(){
    session()->flush();
    echo "delete session";
  });
});


Route::get('/se', function(){
  session()->put('isLoggedIn', true);
  session()->put('data', ['id'=>1, 'name'=>'eman mahmoud', 'email'=> 'ahlamelhna@gmail.com']);
 var_dump(session()->get('isLoggedIn'));
});


Route::get('sessionArray', function(){
  dd(session()->get('data')['name']);
  //session()->put('data', ['id'=>1, 'name'=>'eman mahmoud', 'email'=> 'ahlamelhna@gmail.com']);
});

Route::get('/cookieArray', 'NewsController@cookieArray');

Route::get('/angular', function(){
  return view('angular');
});
Route::get('/courseTable', function(){
  return view('courseTable');
});

Route::get('/courseList', function(){
  return view('courseList');
});

Route::get('/angularRequest', function(){
  return view('angularRequest');
});

