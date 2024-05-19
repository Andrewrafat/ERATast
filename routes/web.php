<?php

use App\Http\Controllers\Dashboad\AuthController;
use App\Http\Controllers\Dashboad\MainController;
use App\Http\Controllers\Dashboad\PostsController;
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
    return view('welcome');
});
Route::get('/', [AuthController::class, 'login']);
Route::post('admin_login', [AuthController::class, 'admin_login'])->name('login');
Route::get('setlang/{lang}', [AuthController::class, 'setlang'])->name('set_lang');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('main', [AuthController::class, 'index'])->name('main.index');


// /*/*/*/*/*/*//*/*//*/*/*/*/*/*/*/*///*//**/*/*/*/ */
Route::get('users', [MainController::class, 'users']);
Route::get('getusers', [MainController::class, 'getusers']);
Route::get('getusersdata/{id}', [MainController::class, 'getusersdata']);
Route::put('UpdateUser/{id}', [MainController::class, 'UpdateUser'])->name('User.update');
Route::post('AddUser', [MainController::class, 'AddUser']);
Route::delete('DeleteUser/{id}', [MainController::class, 'DeleteUser']);
// /*/*/*/*/*/*//*/*//*/*/*/*/*/*/*/*///*//**/*/*/*/ */
//         POSTS CRUD               
// /*/*/*/*/*/*//*/*//*/*/*/*/*/*/*/*///*//**/*/*/*/ */ 
Route::get('posts', [PostsController::class, 'posts']);
Route::get('getposts', [PostsController::class, 'getposts']);
Route::get('getpostsdata/{id}', [PostsController::class, 'getpostsdata']);
Route::put('UpdatePost/{id}', [PostsController::class, 'UpdatePost'])->name('Post.update');
Route::post('AddPost', [PostsController::class, 'AddPost']);
Route::delete('DeletePost/{id}', [PostsController::class, 'DeletePost']);
// /*/*/*/*/*/*//*/*//*/*/*/*/*/*/*/*///*//**/*/*/*/ */
Route::get('test', function () {
    event(new App\Events\NotificationEvent('Monika'));
    return "Event has been sent!";
});