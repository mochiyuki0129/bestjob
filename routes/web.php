<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasswordController;


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

// 全ユーザー
Route::get('test', [TalentController::class, 'test'])->name('test');
Route::get('/', [TalentController::class, 'index']);
Route::get('index', [TalentCotroller::class, 'index'])->name('index');
Route::get('login', [TalentController::class, 'showLogin'])->name('login.show');
Route::post('login', [TalentController::class, 'login'])->name('login');
Route::get('loginForm', [AdminController::class, 'loginForm'])->name('loginForm');
Route::post('adminLogin', [AdminController::class, 'adminLogin'])->name('adminLogin');
Route::get('signup', [TalentController::class, 'showSignup'])->name('signup');
Route::post('type', [TalentController::class, 'type'])->name('type');
Route::get('confirm', [TalentController::class, 'confirm'])->name('confirm');
Route::post('confirm', [TalentController::class, 'confirm'])->name('confirm');
Route::post('complete', [TalentController::class, 'complete'])->name('complete');
Route::get('reset', [PasswordController::class, 'reset'])->name('reset');
Route::post('reset', [PasswordController::class, 'resetSend'])->name('resetSend');
Route::get('sendMail', [PasswordController::class, 'sendMail'])->name('sendMail');
Route::get('editPassword', [PasswordController::class, 'editPassword'])->name('editPassword');
Route::post('updatePassword', [PasswordController::class, 'updatePassword'])->name('updatePassword');
Route::get('passwordComplete', [PasswordController::class, 'passwordComplete'])->name('passwordComplete');

// 一般ユーザー
Route::group(['middleware' => ['auth']], function () {
    Route::get('main', [TalentController::class, 'main'])->name('main');
    Route::post('logout', [TalentController::class, 'logout'])->name('logout');
    Route::get('mypage', [TalentController::class, 'mypage'])->name('mypage');
    Route::get('/recruit/{id}', [TalentController::class, 'recruit'])->name('recruit');
    Route::get('/apply/{id}', [TalentController::class, 'apply'])->name('apply');
    Route::post('/applyConfirm/{id}', [TalentController::class, 'applyConfirm'])->name('applyConfirm');
    Route::get('/applyComplete/{id}', [TalentController::class, 'applyComplete'])->name('applyComplete');
    Route::post('/applyComplete/{id}', [TalentController::class, 'applyComplete'])->name('applyComplete');
});

// サイト管理者
// Route::group(['middleware' => ['admin.auth']], function () {
    Route::post('adminLogout', [AdminController::class, 'adminLogout'])->name('adminLogout');
    Route::get('admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('adminCSV', [AdminController::class, 'adminCSV'])->name('adminCSV');
    Route::get('adminDetail{id}', [AdminController::class, 'adminDetail'])->name('adminDetail');
    Route::get('register', [AdminController::class, 'register'])->name('register');
    Route::get('adminEdit{id}', [AdminController::class, 'adminEdit'])->name('adminEdit');
    Route::post('adminEditConfirm{id}', [AdminController::class, 'adminEditConfirm'])->name('adminEditConfirm');
    Route::post('adminEditComplete{id}', [AdminController::class, 'adminEditComplete'])->name('adminEditComplete');
    Route::post('adminDelete', [AdminController::class, 'adminDelete'])->name('adminDelete');
    Route::post('manageConfirm', [AdminController::class, 'manageConfirm'])->name('manageConfirm');
    Route::post('manageComplete', [AdminController::class, 'manageComplete'])->name('manageComplete');
    Route::post('adminCSV', [AdminController::class, 'adminCSV'])->name('adminCSV');
// });
