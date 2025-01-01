<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/home');
});

Route::get('/order-detail', function () {
    return view('user/order_detail');
});

Route::get('/menu', function () {
    return view('user/menu');
});

Route::get('/menu/{category}/{id}', function ($category, $id) {
    return view('user/menu_detail', compact('category', 'id'));
});

Route::get('/admin', function () {
    return view('admin/home');
});

Route::get('/admin/home', function () {
    return view('admin/home');
});

Route::get('/admin/setting', function () {
    return view('admin/setting');
});

Route::get('/admin/setting', function () {
    return view('admin/discount_management');
});

Route::get('/admin/setting/kelola-diskon', function () {
    return view('admin/discount_management');
});

Route::get('/admin/setting/kelola-pajak', function () {
    return view('admin/tax_management');
});

Route::get('/admin/setting/kelola-printer', function () {
    return view('admin/printer_management');
});
