<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// url: superadmin/user
// view: resources/views/superadmin/user/index.blade.php

Route::view('superadmin/users', 'superadmin.user.index')->name('superadmin.users.index');

Route::view('superadmin/categories', 'superadmin.category.index')->name('superadmin.categories.index');

Route::view('superadmin/stocks', 'superadmin.stock.index')->name('superadmin.stocks.index');

Route::view('admin/stocks', 'admin.stock.index')->name('admin.stocks.index');