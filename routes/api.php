<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\presenca;
use App\Http\Controllers\TurmaController;





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/presentes', presenca::class);
Route::apiResource('/users', UserController::class );
Route::apiResource('/turmas', TurmaController::class );
Route::patch('/user/{id}', [UserController::class, 'patch' ]);
Route::put('/users/{id}', [UserController::class, 'update' ]);  
Route::post('/user', [UserController::class, 'store']);
Route::get('/turmas/search/{id}', [TurmaController::class, 'searchByTurma' ]);
Route::get('/turmas/by-aluno/{id}', [TurmaController::class, 'searchByAluno']);
