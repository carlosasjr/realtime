<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/create-post', function () {
   $user = \App\Models\User::first();

   $post = $user->posts()->create([
       'title' => Str::random(100),
       'body' => Str::random(400)
   ]);

   //event(new \App\Events\PostCreated($post));

   return 'ok';
});

Route::get('/', [SiteController::class, 'index']);
