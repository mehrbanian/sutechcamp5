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

Route::prefix('panel')->group( function (){

    Route::get('/', function () {
//        $articles = DB::table('articles')->get();
//        $articles = DB::table('articles')->find(2);
//        $articles = DB::table('articles')->where('slug', $slug)->first();

        $articles = DB::table('articles')->insert([
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

    Route::get('/news', function () {
        return view('panel.news');
    });

});





