<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

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
    return view('welcome');
});

Route::get('showUser/{id}', [HomeController::class,"show"])->name("showUser");

Route::get('/dashboard', function () {
    $users = User::simplePaginate(10);
    return view('dashboard',compact('users'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('post', function () {

    $posts = Post::paginate(2);
    return view("posts",compact("posts"));

});


Route::get('post/{id}', [PostController::class,"readPost"])->name("readPost");
