<?php

use Illuminate\Support\Facades\Route;

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
    $posts = App\Models\Post::latest('published_at')->get(); //cuando dentro de latest no ponemos ninguna campo, lo ordena por fecha de creacion

    return view('welcome', compact('posts')); //el compact es como hacer posts = $posts, le pasamos el arreglos de posts a la vista principal
});

Route::get('admin', function(){
    return view('admin.dashboard');
});

Route::get('posts', function () {
    return App\Models\Post::all();
    //return view('welcome');
});

Route::auth();
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');
// Route::resetPassword();
// Route::confirmPassword();
// Route::emailVerification();