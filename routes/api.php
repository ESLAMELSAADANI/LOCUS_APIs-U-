<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\PostController;

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

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('events', [EventController::class, 'index']);
Route::get('events/{date}', [EventController::class, 'getEventsByDate']);

Route::middleware('auth:sanctum')->group(function () {
    // Create a new post and retreive all postsph
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts', [PostController::class, 'index']);

    // Update an existing post
    Route::put('/posts/{post}', [PostController::class, 'update']);

    // Delete an existing post
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);
    Route::get('/posts', [PostController::class, 'index']);
    // Routes for managing likes
    Route::post('/posts/{post}/like', [LikeController::class, 'store']); // Route for adding a like
    Route::delete('/posts/{post}/like', [LikeController::class, 'destroy']); // Route for removing a like

    // Routes for managing comments
    Route::post('/posts/{post}/comment', [CommentController::class, 'store']); // Route for adding a comment
    Route::put('/posts/{post}/comments/{comment}', [CommentController::class, 'update']); // Route for updating a comment
    Route::delete('/posts/{post}/comments/{comment}', [CommentController::class, 'destroy']); // Route for deleting a comment
});
