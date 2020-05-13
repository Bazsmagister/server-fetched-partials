<?php

use App\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    // $users = App\User::inRandomOrder()->limit(5)->get();
    return view('sponsorships');
});

Route::get('/partials/developers', function () {
    $users = App\User::inRandomOrder()->limit(5)->get();
    return view('_developers', ['users' => $users]);
});
