<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KitchenController;
use App\Mail\ContactEmail;
use App\Models\Kitchen;
use Illuminate\Support\Facades\Mail;
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

Route::get('/password-generator', function() {
    $pass = 'password@123';
    $hased = Hash::make($pass);
    dd($hased);
});

Route::get('/check-email', function() {
    $contact_info['firstname'] = 'hanumakn';
    $contact_info['lastname'] = 'hanumakn';
    $contact_info['email'] = 'hanumakn';
    $contact_info['phone'] = 'hanumakn';
    $contact_info['message'] = 'hanumakn';

    Mail::to('hanumanbabu.shaik@yopmail.com')->send(new ContactEmail($contact_info));
    return view('mail.contact', [
        'contact_info' => $contact_info
    ]);
});
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/menu', function() {

    $kitchen_items = Kitchen::where('status', 1)->get();

    $break_fast = $kitchen_items->filter(function($item) {
        return $item->type == 1;
    });

    $lunch = $kitchen_items->filter(function($item) {
        return $item->type == 2;
    });

    $dinner = $kitchen_items->filter(function($item) {
        return $item->type == 3;
    });

    return view('menu', [
        'break_fast' => $break_fast,
        'lunch' => $lunch,
        'dinner' => $dinner,
    ]);
})->name('menu');
Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'admin.login')->name('login');

Route::get('/contact-information', [AdminController::class, 'contact'])->middleware('auth')->name('contact_info');
Route::post('/store_contact', [AdminController::class, 'store_contact'])->name('store_contact');
Route::get('logout', [AdminController::class, 'logout'])->middleware('auth');
Route::post('/login', [AdminController::class, 'login'])->name('auth.login');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::resource('/kitchen', KitchenController::class)->middleware('auth');

