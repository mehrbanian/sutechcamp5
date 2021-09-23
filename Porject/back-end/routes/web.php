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




Route::get('/dump', function (){
    foreach ( range(1, 10) as $i ){
        DB::table('posts')->insert([
            'title' => "مقاله شماره $i",
            'slug' => "article-$i",
            'content' => "متن آزمایشی $i برای نوشته‌های $i سایت",
            'user_id' => 1,
            'type' => rand(1,2),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
    $names = ['امید', 'غزل', 'ایمان', 'نگار'];
    $mails = ['omid', 'ghazal', 'eiman', 'negar'];
    $wallets = [25000, 37000, 15000, 11000];
    $roles = [1, 2, 3, 1];
    foreach ( range(0,3) as $i ){
        DB::table('users')->insert([
            'name' => $names[$i],
            'email' => "$mails[$i]@local.com",
            'wallet' => $wallets[$i],
            'role' => $roles[$i],
            'password' => '123',
            'bio' => "بیوگرافی کوتاه $names[$i]"
        ]);
    }

    dd('Done!');
});

