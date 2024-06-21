<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorpayPaymentController;

Route::get('welcome', function () {
    return view('welcome');
});


Route::get('/', [RazorpayPaymentController::class, 'index']);
Route::post('/', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
