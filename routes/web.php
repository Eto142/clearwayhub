<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/process', function () {
    return view('home.homepage');
});

// Route::get('/tax-payment', function () {
//     return view('home.tax-payment');
// });


// Route::get('/tax-payment', function (Request $request) { 
//     $returnUrl = $request->query('return'); // gets the "return" query parameter from the URL
//     return view('home.tax-payment', compact('returnUrl')); // passes it to Blade
// });

Route::get('/tax-payment', function (Request $request) {
    $returnUrl = $request->query('return');
    return view('home.tax-payment', compact('returnUrl'));
})->name('tax.payment');




Route::get('/users', [RegisterController::class, 'index'])->name('users.index');
Route::get('/users/create', [RegisterController::class, 'create'])->name('users.create');
Route::post('/users', [RegisterController::class, 'store'])->name('users.store');
Route::get('/tax-details/{user}', [RegisterController::class, 'show'])->name('tax.show');