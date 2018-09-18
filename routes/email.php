<?php
Route::get('/user_register', function () {
    $user=\App\User::findOrFail(1);
    return new App\Mail\UserRegister($user);
});

Route::get('/inscription_request_received', function () {
    return new App\Mail\InscriptionRequestReceived();
});

Route::get('/file_voucher_upload', function () {
    $user=\App\User::findOrFail(1);
    return new App\Mail\FileVoucherUpload($user);
});

Route::get('/file_voucher_paid_upload', function () {
    $user=\App\User::findOrFail(1);
    return new App\Mail\FileVoucherPaidUpload($user);
});

Route::get('/inscription_success', function () {
    $user=\App\User::findOrFail(1);
    return new App\Mail\InscriptionSuccess($user);
});

Route::get('/inscription_refused', function () {
    $user=\App\User::findOrFail(4);
    return new App\Mail\InscriptionRefused($user);
});