<?php

use App\Models\User;
use App\Notifications\RealTimeMessageNotification;
use Illuminate\Support\Facades\Route;

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
})->name('home');
Route::get('/send-notification',function(){
$user=User::first();
$user->notify((new RealTimeMessageNotification("hello this message from ")));
return 'Notification send';
});

require __DIR__ . '/auth.php';
