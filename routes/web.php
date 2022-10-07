<?php

use App\Http\Livewire\Select2;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications;
use Illuminate\Notifications\Notification;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('worker', [App\Http\Controllers\WorkerController::class, 'index'])->name('worker');
Route::post('worker', [App\Http\Controllers\WorkerController::class, 'search'])->name('worker.search');






 Auth::routes(['verif' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verif');


Route::get('/w', function () {
    return view('openWorks.show');
});

Route::get('/works', [App\Http\Controllers\WorksController::class, 'index'])->name('works');
Route::get('/work/create', [App\Http\Controllers\WorksController::class, 'create'])->name('work.create');
Route::post('/work/create', [App\Http\Controllers\WorksController::class, 'store'])->name('work.store');
Route::get('/work/delete/{id}', [App\Http\Controllers\WorksController::class, 'delete'])->name('work.delete');
// Route::get('/eidt', [App\Http\Controllers\ProfileController::class, 'eidt'])->name('eidt');

Route::get('/user/{username}', [App\Http\Controllers\UserController::class, 'show'])->name('user.index');

Route::get('/open_works', [App\Http\Controllers\OpenWorkController::class, 'index'])->name('open_works');
Route::post('/open_works/filter', [App\Http\Controllers\OpenWorkController::class, 'filter'])->name('openwork.filter');
Route::get('/open_works/d/d{departement_id}', [App\Http\Controllers\OpenWorkController::class, 'index'])->name('openwork');
Route::get('/open_work/create', [App\Http\Controllers\OpenWorkController::class, 'create'])->name('openwork.create');
Route::post('/open_work/create', [App\Http\Controllers\OpenWorkController::class, 'store'])->name('openwork.store');
Route::get('/w/{open_work}', [App\Http\Controllers\OpenWorkController::class, 'show'])->name('openwork.show');

Route::get('/offer', [App\Http\Controllers\OffersController::class, 'index'])->name('offer');
Route::post('/w/create', [App\Http\Controllers\OffersController::class, 'store'])->name('offer.store');
Route::post('/w/acceptOffer', [App\Http\Controllers\OffersController::class, 'acceptOffer'])->name('offer.acceptOffer');
Route::post('/offer/was', [App\Http\Controllers\OffersController::class, 'was'])->name('offer.was');

// Route::get('/user/{id}', 'UserController@show')->name('user.show');
Route::get('profile/settings',[App\Http\Controllers\ProfileController::class,'eidt'])->name('profile.settings');

Route::group(['middleware' => ['auth','verif']], function() {

    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/profile-edit', [App\Http\Controllers\ProfileController::class, 'eidt'])->name('profile-edit');

    Route::post('/profile-edit',[App\Http\Controllers\ProfileController::class,'upload'])->name('profile.upload');

    Route::post('/profile-update',[App\Http\Controllers\ProfileController::class,'update'])->name('profile.update');
    Route::post('/profile-updateCitys',[App\Http\Controllers\ProfileController::class,'updateCitys'])->name('profile.updateCitys');
    Route::post('/updatePassword',[App\Http\Controllers\ProfileController::class,'updatePassword'])->name('profile.updatepassword');


    Route::post('/Evaluation',[App\Http\Controllers\EvaluationController::class,'store'])->name('Evaluation.create');



    // Evaluation

    // Route::post('/Evaluation',[App\Http\Controllers\ProfileController::class,'store'])->name('Evaluation.create');

});

Route::get('/createCode', [App\Http\Controllers\AuthOtpController::class, 'createCode'])->name('createCode')->middleware('auth');
Route::get('/verification', [App\Http\Controllers\AuthOtpController::class, 'index'])->name('verification')->middleware('auth');
Route::post('/verification', [App\Http\Controllers\AuthOtpController::class, 'loginWithOtp'])->name('verification.loginWithOtp')->middleware('auth');

Route::group(['middleware' => ['admin']], function() {


    Route::get('dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('dashboard/users', function () {
        return view('dashboard.users');
    })->name('dashboard.users');

    Route::get('dashboard/province', function () {
        return view('dashboard.province');
    })->name('dashboard.province');


    Route::get('dashboard/directorate', function () {
        return view('dashboard.directorates');
    })->name('dashboard.directorates');

    Route::get('dashboard/departement', function () {
        return view('dashboard.departement');
    })->name('dashboard.departement');

    Route::get('dashboard/openWorks', function () {
        return view('dashboard.openWorks');
    })->name('dashboard.openWorks');



});

 Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth','verif'])->name('home');



//  Route::group(['prefix' => 'works'], function() {
//     Route::get('/', 'PostsController@index')->name('posts.index');
//     Route::get('/create', 'PostsController@create')->name('posts.create');
//     Route::post('/create', 'PostsController@store')->name('posts.store');
//     Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
//     Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
//     Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
//     Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
// });

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.perform');

Route::get('add', function () {
    return view('add');
});

Route::post('/addp',  [App\Http\Controllers\HomeController::class, 'storep'] )->name('addp');
Route::post('/addd',  [App\Http\Controllers\HomeController::class, 'stored'] )->name('addd');
<<<<<<< HEAD
Route::post('/img',  [App\Http\Controllers\HomeController::class, 'img'] )->name('img');

Route::get('/sitemap.xml', [App\Http\Controllers\HomeController::class, 'sitemap']);
=======
>>>>>>> parent of 1d4fe87 (sitemap)
