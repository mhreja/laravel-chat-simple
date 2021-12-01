<?php

use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    
    Route::get('/chatroom', function () {
        return view('chatroom');
    })->name('chatroom');
    
    Route::post('/send-message', function (Request $request) {
        event(new Message(Auth::user()->name, $request->input('message'), Auth::user()->id, $request->input('receiver_id')));
        return ['success'=>true];
    })->name('message.send');
});

