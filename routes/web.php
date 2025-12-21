<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('html101');
});

Route::post('/', function (Request $request) {
    // รับค่าจาก input ในฟอร์ม
    $fname = $request->input('fname');
    $fsurname = $request->input('fsurname');
    $fbirth = $request->input('fbirth');
    $fbirth = $request->input('fbirth');
    $fsex = $request->input('fsex');
    $faddress = $request->input('faddress');
    $fcolor= $request->input('fcolor');
    $fmusic= $request->input('fmusic');
    // ส่งตัวแปรไปที่หน้า result.blade.php
    return view('result', [
        'fname' => $fname,
        'fsurname' => $fsurname,
        'fbirth' => $fbirth,
        'fsex' => $fsex,
        'faddress' => $faddress,
        'fcolor' => $fcolor,
        'fmusic' => $fmusic,
    ]);
});

Route::get('/view2', function () {
    return view('myview2');
});

// Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
// Route::post('/mycontroller',[App\Http\Controllers\MyController::class, 'process']);
