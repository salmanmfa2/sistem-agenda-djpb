<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;
use Spatie\GoogleCalendar\Event;

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

// Route::get('/',[CalendarController::class,'getCalendar'])->name('home');
// Route::get('/calendar',[CalendarController::class,'getData']);
// Route::get('/',[AgendaController::class,'getAllData'])->name('dashboard');
// Route::get('/test',function(){
//     $event = new Event;
//     $event->name = "Test From App";
//     $event->startDateTime = Carbon\Carbon::now();
//     $event->endDateTime = Carbon\Carbon::now()->addHour();

//     $event->save();

//     $e = Event::get();

//     dd($e);
// });
Route::get('/',[AgendaController::class,'getAllDataJadwal'])->name('jadwal');
Route::get('/jadwal/detail/{id_agenda}',[AgendaController::class,'getDetailAgenda']);
Route::get('/jadwal/edit/{id_agenda}',[AgendaController::class,'editDetailAgenda'])->middleware('auth');;
Route::post('/jadwal/update/{id_agenda}',[AgendaController::class,'updateAgenda'])->middleware('auth');;
Route::get('/jadwal/add',[AgendaController::class,'addAgenda'])->middleware('auth');;
Route::post('/jadwal/insert',[AgendaController::class,'insertAgenda'])->middleware('auth');;
Route::get('/jadwal/delete/{id_agenda}/{event_id}',[AgendaController::class,'deleteAgenda'])->middleware('auth');

Route::get('/about',[AboutController::class,'getAbout']);

Route::get('/change-password',[PasswordController::class,'changePassword']);
Route::post('/change-password/update',[PasswordController::class,'updatePassword']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
