<?php

use App\Http\Controllers\Api\sm_mem_m_membership_registeredController;
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

Route::get('userdata',[sm_mem_m_membership_registeredController::class, 'index']);

Route::get('personal/{id}',[sm_mem_m_membership_registeredController::class, 'show']);
//Route::group([])
Route::post('deposit_dep_and_withdraw_summary_year', [sm_mem_m_membership_registeredController::class, 'deposit_dep_and_withdraw_summary_year']);