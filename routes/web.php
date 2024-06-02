<?php

use App\Http\Controllers\ContactController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('contact')->group(function () {
    Route::get('', function () {
        $contacts = Contact::paginate(8);
        return view('contact.index', compact('contacts'));
    })->name('contact.index');

    Route::post('', [
        ContactController::class, 'store'
    ])->name('contact.store');
});
