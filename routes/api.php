<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*php
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//post
//1. get all (GET)
//2. create (POST)
//3. update (PUT/PATCH)
//4. show  
//5. delete (DELTE)

Route::resource('userlist', 'App\Http\Controllers\UserlistController');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

