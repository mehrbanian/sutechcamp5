<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'PostController@index')->name('home');

Route::get('/uploads/{folder}/')->name('uploads');


// front
Route::prefix('posts')->group( function (){

   Route::get('/', 'PostController@index');
   Route::get('/{post:slug}', 'PostController@single')->name('posts.single');

});

Route::post('/subscribe', 'SubscribeController@new')->name('subs.new');


//Route::prefix('posts')->group( function (){
//Route::prefix('posts')->namespace('\App\Http\Controllers')->group( function (){
//   Route::get('/', ['\App\Http\Controllers\PostController', 'index']);
//   Route::get('/', 'PostController@index'); // v5, v6
//    Route::get('/{slug}', ['\App\Http\Controllers\PostController', 'single']);


// Panel
Route::group(['prefix'=>'panel', 'namespace'=>'Admin', 'middleware'=>'AdminAuth'] ,function (){
//Route::group(['prefix'=>'panel', 'namespace'=>'Admin'] ,function (){

    /*Route::get('/', function () {
//        $articles = DB::table('articles')->get();
//        $articles = DB::table('articles')->find(2);
//        $articles = DB::table('articles')->where('slug', $slug)->first();

        /*foreach ( range(1, 10) as $item){
            $articles = DB::table('posts')->insert([
                'title'=> "Article Title $item",
                'slug'=> "article-$item",
                'body'=>"محتوای مقاله آموزشی $item"
            ]);
        }*/
        /*$articles = DB::table('posts')->insert([
            'title'=> 'سومین آموزش',
            'slug'=> '3',
            'body'=>'محتوای سوم'
        ]);
        dd($articles);*
//        return view('panel.index');
    });*/


    Route::get('/', function (){
        return view('panel.index');
    })->name('panel.index');

    Route::get('/users', function () {
        return view('panel.index');
    });
    Route::get('/users/new', function () {
        return 'Add new User';
    });

    Route::prefix('posts')->group(function (){

//        Route::get('/', 'PostController@index')->name('panel.posts')->middleware('auth');
        Route::get('/', 'PostController@index')->name('panel.posts');
        Route::get('/new', 'PostController@new')->name('panel.posts.new');
        Route::post('/new', 'PostController@add');
        Route::get('/{id}/edit', 'PostController@edit')->name('panel.posts.edit');
        Route::post('/{id}/edit', 'PostController@update');
        Route::get('/{id}/delete', 'PostController@delete')->name('panel.posts.delete');
    });

    Route::prefix('users')->group(function (){
        Route::get('/', 'UserController@index')->name('panel.users');
        Route::get('/new', 'UserController@new')->name('panel.users.new');
        Route::post('/new', 'UserController@add');
        Route::get('/{id}/edit', 'UserController@edit')->name('panel.users.edit');
        Route::post('/{id}/edit', 'UserController@update');
        Route::get('/{user}/delete', 'UserController@delete')->name('panel.users.delete');
    });

});

Auth::routes();


Route::get('/test', function (){
//    $result = Auth::attempt(['email'=>'omid@yahoo.com', 'password'=>'123456789']);

//    dd($result);
//    dd(Auth::check());

//    dd(auth()->user());


    // @auth
    /*if (Auth::check()){
        Auth::user()->name;
    }*/

//    dd(auth()->user()->subscribes()->first()->expired_at);
});

