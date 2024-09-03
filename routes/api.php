<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::post("register", [ApiController::class, "register"]);

Route::post('/user',[UserController::class, "store"]);
Route::put('/user/{documentNumber}',[UserController::class, "update"]);
Route::delete("/user/{documentNumber}", [UserController::class, "delete"]);
Route::get("/user/{documentNumber}", [UserController::class,"find"]);
Route::get("/users", [UserController::class, "getAll"]);

Route::get("/saludo", function() {
    return 'hola';
});
