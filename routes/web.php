<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RazorpayController;


Route::name('razorpay.')
->controller(RazorpayController::class)
->prefix('razorpay')
->group(function () {
    Route::view('payment', 'razorpay.index')->name('create.payment');
    Route::post('handle-payment', 'handlePayment')->name('make.payment');
});