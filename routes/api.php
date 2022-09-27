<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController\AuthController;
use App\Http\Controllers\AppController\profileontroller;
use App\Http\Controllers\AppController\DepartementController;
use App\Http\Controllers\AppController\DirectoratesController;
use App\Http\Controllers\AppController\ProvincesController;
use App\Http\Controllers\AppController\OpenWorkController;
use App\Http\Controllers\AppController\WorkController;
use App\Http\Controllers\AppController\HomepageController;
use App\Http\Controllers\AppController\WorkerController;
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

Route::get('/showDepartement', [DepartementController::class, 'showDepartement']);
Route::get('/showDirectorate', [DirectoratesController::class, 'showDirectorate']);
Route::get('/showProvince   ', [ProvincesController::class, 'showProvince']);
Route::post('/save   '       , [OpenWorkController::class, 'save']);
Route::get('/openWork   '       , [OpenWorkController::class, 'index']);
Route::post('/saveWork   '   ,[WorkController::class, 'saveWork']);
Route::post('/showWork',[WorkController::class,'showWorks']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/users', [AuthController::class, 'users']);
Route::get('/',[HomepageController::class,'index']);
Route::post('/search',[HomepageController::class,'search']);
Route::post('/resultOfSearch',[HomepageController::class,'resultOfSearch']);
Route::get('/worker',[HomepageController::class,'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/h',function(){
return response(['user'=>'dfdf','dfdf'=>2], 200);

});


// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function() {

    // User
    Route::get('/user', [AuthController::class, 'user']);
    //Route::put('/user', [AuthController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/user/editprofile', [profileontroller::class, 'updateinfo']);


   // Route::get('/show',[AuthController::class, 'shows']);

    // Post
    //Route::get('/posts', [PostController::class, 'index']); // all posts
    //Route::post('/posts', [PostController::class, 'store']); // create post
    //Route::get('/posts/{id}', [PostController::class, 'show']); // get single post
    //Route::put('/posts/{id}', [PostController::class, 'update']); // update post
    //Route::delete('/posts/{id}', [PostController::class, 'destroy']); // delete post

    // Comment
    //Route::get('/posts/{id}/comments', [CommentController::class, 'index']); // all comments of a post
    //Route::post('/posts/{id}/comments', [CommentController::class, 'store']); // create comment on a post
    //Route::put('/comments/{id}', [CommentController::class, 'update']); // update a comment
    //Route::delete('/comments/{id}', [CommentController::class, 'destroy']); // delete a comment

    // Like
    //Route::post('/posts/{id}/likes', [LikeController::class, 'likeOrUnlike']); // like or dislike back a post
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
