<?php

use App\Http\Controllers\JournalController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("journals")->group(function(){
    Route::get("/",[JournalController::class, 'index']);
    Route::delete("{id}",[JournalController::class, "destroy"]);
    Route::post('/',[JournalController::class,"store"]);
    Route::put('/',[JournalController::class, "update"]);
});
// Route::prefix("/upload-file")->group(function(){
//     Route::get("/",[ExcelUploader::class, 'index']);
// });

Route::post('/upload-file',[JournalController::class,'excelUpload']);