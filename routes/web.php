<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// url: superadmin/user
// view: resources/views/superadmin/user/index.blade.php

Route::view('superadmin/user', 'superadmin.user.index')->name('superadmin.user.index');