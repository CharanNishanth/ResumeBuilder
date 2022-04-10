<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResumeController;

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

Route::get('/', function () {
    return view('main');
});

Auth::routes(); 



Route::get('/home',[HomeController::class,'index'])->name('home');

//Route::get('user-detail/create',[UserDetailController::class,'create'])->middleware('auth')->name('user-detail.create'); 

//Route::post('user-detail',[UserDetailController::class,'store']);


Route::resource('user-detail',UserDetailController::class)->middleware('auth');

Route::resource('education',EducationController::class)->middleware('auth');

Route::resource('experience',ExperienceController::class)->middleware('auth');

Route::resource('skill',SkillController::class)->middleware('auth');

Route::get('resume',[ResumeController::class,'index'])->name('resume.index')->middleware('auth');
Route::get('resume/download',[ResumeController::class,'download'])->name('resume.download')->middleware('auth');