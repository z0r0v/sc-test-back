<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\AuditLogController;
use App\Enums\RolesEnum;

Route::get('auth', [AuthController::class, 'get']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('users', [UsersController::class, 'get'])->middleware(['allowRole:' . RolesEnum::Editor->value]);

    Route::get('messages', [MessagesController::class, 'get']);
    Route::post('messages', [MessagesController::class, 'post']);
    Route::put('messages/{message}', [MessagesController::class, 'put'])->middleware(['allowRole:' . RolesEnum::Editor->value]);

    Route::get('audit_log', [AuditLogController::class, 'get']);
});


