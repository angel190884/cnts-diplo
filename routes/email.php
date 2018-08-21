<?php
Route::get('/user_register', function () {
    $user=\App\User::findOrFail(1);
    return new App\Mail\UserRegister($user);
});

Route::get('/inscription_request_received', function () {
    return new App\Mail\InscriptionRequestReceived();
});