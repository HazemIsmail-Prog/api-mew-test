<?php

use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ReusableListController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('users', UserController::class);
    Route::apiResource('contracts', ContractController::class);
    Route::apiResource('stakeholders', StakeholderController::class);
    Route::apiResource('documents', DocumentController::class);

    // Nested routes for steps
    Route::prefix('documents/{document}')->group(function () {
        Route::apiResource('steps', StepController::class);
    });

    // Nested routes for attachments
    Route::prefix('documents/{document}')->group(function () {
        Route::apiResource('attachments', AttachmentController::class)->only('store','destroy');
    });

    Route::put('documents/toggleIsCompleted/{document}', [DocumentController::class, 'toggleIsCompleted']);
    Route::post('documents/saveToS3/{document}', [DocumentController::class, 'saveToS3']);
    Route::get('contractsWithNoParent', [ContractController::class, 'getContracts']);

    Route::controller(ReusableListController::class)
        ->group(function () {
            Route::get('contractsWithNoParent', 'contractsWithNoParent');
            Route::get('allContracts', 'allContracts');
            Route::get('allStakeholders', 'allStakeholders');
        });

});
