<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuardlockWrapperController;
use App\Http\Controllers\SoftwareVersionController;
use App\Http\Controllers\CardCommandsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('DesktopSecretKeys', \App\Http\Controllers\DesktopSecretKeysController::class)->middleware('auth.apikey');

Route::controller(QuardlockWrapperController::class)->group(function () {
    Route::get('/AuthenticateWithMode/{cardid}/{cardotp}/{mode}', 'AuthenticateWithMode');
    Route::get('/IsTokenKeyLocked/{cardid}/{mode}', 'IsTokenKeyLocked');
    Route::post('/LockTokenKey/{cardid}/{mode}', 'LockTokenKey');
})->middleware('auth.apikey');

Route::controller(SoftwareVersionController::class)->group(function () {
    Route::get('/checkVersion/{name}/{version}', 'checkVersion');
})->middleware('auth.apikey');


Route::controller(CardCommandsController::class)->group(function () {
    Route::get('/getSupportedCards', 'getSupportedCards');
    Route::get('/getUserData', 'getUserData');
    Route::get('/checkCardByAtr/{channel}/{atr}', 'checkCardByAtr');
    Route::get('/checkCardByVersion/{atr}/{cardVersion}/{appletVersion}', 'checkCardBySwVersions');
    Route::get('/getResponseCodes/{id}/{lang}', 'getResponseCodes');
    Route::get('/getCommands/{id}', 'getCommands');
    Route::get('/getCommand/{id}/{channel}/{command}', 'getCommand');
    Route::get('/getSequence/{id}/{channel}/{sequenceName}', 'getSequence');
    Route::post('/generateCommand/{id}/{channel}/{command}', 'generateCommand');
})->middleware('auth.apikey');
