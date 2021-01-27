<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});

/*Rotue::get('/login', function() {
    echo 'Hello Word';
});*/

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});

Route::get('/url', function (){
return view('url');
});

Route::post('/url', function (Illuminate\Http\Request $request) {
    $productDescription = $request->productDescription;
    $listPrice = $request->listPrice;
    $discountPercent = $request->discountPercent;

    $discountAmount = $listPrice*$discountPercent*0.01;
    $discountPrice = $listPrice-$discountAmount;

    return view('display_discount',compact(['productDescription','listPrice','discountPercent','discountAmount','discountPrice']));
});

Route::get('/dictionary', function (){
    return view('dictionary');
});

Route::post('/dictionary', function (Illuminate\Http\Request $request) {
    $text = $request->textBox;
    $dictionary = ['text' => 'văn bản', 'name' => 'tên','dog'=>'chó','cat'=>'mèo'];

    $value = isset($dictionary[$text])?$dictionary[$text] : 'không tìm thấy';

    return view('display_dictionary',compact(['text','value']));
});
