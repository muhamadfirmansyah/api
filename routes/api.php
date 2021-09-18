<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [APIController::class, 'authenticate']);
Route::post('register', [APIController::class, 'register']);

Route::group(['middleware' => ['jwt.verify']], function () {
   Route::get('/logout', [APIController::class, 'logout']);
   Route::get('/get_user', [APIController::class, 'getUser']);
   Route::get('/products', [ProductController::class, 'index']);
   Route::get('/products/{id}', [ProductController::class, 'show']);
   Route::post('/products', [ProductController::class, 'store']);
   Route::put('/products/update/{product}', [ProductController::class, 'update']);
   Route::delete('/products/delete/{product}', [ProductController::class, 'destroy']);
});