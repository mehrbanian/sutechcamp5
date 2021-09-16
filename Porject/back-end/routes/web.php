<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('home', [
        'title'=>'صفحه اصلی سایت من'
    ]);
});

Route::get('/news/{query}', function ($query) {
    return view('home', [
        'query'=>$query,
        'users'=>['omid', 'sara', 'ehsan', 'negar']
    ]);
});

// front
Route::prefix('posts')->group( function (){

   Route::get('/', 'PostController@index');
   Route::get('/{slug}', 'PostController@single');

});

//Route::prefix('posts')->group( function (){
//Route::prefix('posts')->namespace('\App\Http\Controllers')->group( function (){
//   Route::get('/', ['\App\Http\Controllers\PostController', 'index']);
//   Route::get('/', 'PostController@index'); // v5, v6
//    Route::get('/{slug}', ['\App\Http\Controllers\PostController', 'single']);


// Panel
Route::group(['prefix'=>'panel', 'namespace'=>'Admin'] ,function (){

    Route::get('/', function () {
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
        $articles = DB::table('posts')->insert([
            'title'=> 'سومین آموزش',
            'slug'=> '3',
            'body'=>'محتوای سوم'
        ]);
        dd($articles);
//        return view('panel.index');
    });
    Route::get('/users', function () {
        return view('panel.index');
    });
    Route::get('/users/new', function () {
        return 'Add new User';
    });

    Route::prefix('posts')->group(function (){

        Route::get('/', 'PostController@index');
        Route::get('/new', 'PostController@new');
        Route::post('/new', 'PostController@add');
        Route::get('/{id}/edit', 'PostController@edit');
        Route::post('/{id}/edit', 'PostController@update');
        Route::get('/{id}/delete', 'PostController@delete');
    });

});




