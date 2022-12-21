<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\InteractionController;
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

Route::prefix('dogs')->group(function () use ($router) {
    $router->get('getDogs', [DogController::class, 'getDogs']);
    $router->post('postDog', [DogController::class, 'postDog']);
    $router->put('putDog/{id}', [DogController::class, 'putDog']);
    $router->delete('deleteDog/{id}', [DogController::class, 'deleteDog']);
});

Route::prefix('interactions')->group(function () use ($router) {
    $router->get('getInteraction', [InteractionController::class, 'getInteraction']);
    $router->get('getInteractionId/{id}', [InteractionController::class, 'getInteractionId']);
    $router->post('postInteraction', [InteractionController::class, 'postInteraction']);
});
