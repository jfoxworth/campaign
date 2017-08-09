<?php

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
    return view('layouts.landing');
});


Route::get('/Issues', function () {
    return view('layouts.issues', ['issue' => 'main']);
});


Route::get('/Issues/ForeignPolicy', function () {
    return view('layouts.issues', ['issue' => 'forpol']);
});
Route::get('/Issues/Equality', function () {
    return view('layouts.issues', ['issue' => 'Equality']);
});
Route::get('/Issues/USEquality', function () {
    return view('layouts.issues', ['issue' => 'USEquality']);
});
Route::get('/Issues/RacialEquality', function () {
    return view('layouts.issues', ['issue' => 'RacialEquality']);
});
Route::get('/Issues/CongressEquality', function () {
    return view('layouts.issues', ['issue' => 'CongressEquality']);
});
Route::get('/Issues/NASA', function () {
    return view('layouts.issues', ['issue' => 'NASA']);
});
Route::get('/Issues/CivilRights', function () {
    return view('layouts.issues', ['issue' => 'CivilRights']);
});
Route::get('/Issues/Monuments', function () {
    return view('layouts.issues', ['issue' => 'Monuments']);
});
Route::get('/Issues/SecondAmendment', function () {
    return view('layouts.issues', ['issue' => 'SecondAmendment']);
});
Route::get('/Issues/HealthCare', function () {
    return view('layouts.issues', ['issue' => 'HealthCare']);
});
Route::get('/Issues/Veterans', function () {
    return view('layouts.issues', ['issue' => 'Veterans']);
});
Route::get('/Issues/Education', function () {
    return view('layouts.issues', ['issue' => 'Education']);
});
Route::get('/Issues/SocialSecurity', function () {
    return view('layouts.issues', ['issue' => 'SocialSecurity']);
});


Route::get('/aboutMe', function () {
    return view('layouts.aboutMe');
});


Route::get('/WhyImRunning', function () {
    return view('layouts.WhyImRunning');
});


Route::get('/district', function () {
    return view('layouts.district');
});


Route::get('/Plan', function () {
    return view('layouts.plan');
});


