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


Route::get('/Issues/Abortion', function () {
    return view('layouts.issues', ['issue' => 'Abortion']);
});

Route::get('/Issues/Marriage', function () {
    return view('layouts.issues', ['issue' => 'Marriage']);
});


Route::get('/Issues/RestoreTheNation', function () {
    return view('layouts.issues', ['issue' => 'RestoreTheNation']);
});

Route::get('/Issues/CollegeDebtRelief', function () {
    return view('layouts.issues', ['issue' => 'CollegeDebtRelief']);
});
Route::get('/Issues/ElectionIntegrity', function () {
    return view('layouts.issues', ['issue' => 'ElectionIntegrity']);
});
Route::get('/Issues/AffirmativeAction', function () {
    return view('layouts.issues', ['issue' => 'AffirmativeAction']);
});
Route::get('/Issues/Immigration', function () {
    return view('layouts.issues', ['issue' => 'Immigration']);
});
Route::get('/Issues/ForeignPolicy', function () {
    return view('layouts.issues', ['issue' => 'ForeignPolicy']);
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
Route::get('/Issues/CongressionalEthics', function () {
    return view('layouts.issues', ['issue' => 'CongressionalEthics']);
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
Route::get('/Issues/TermLimits', function () {
    return view('layouts.issues', ['issue' => 'TermLimits']);
});


Route::get('/aboutMe', function () { return view('layouts.aboutMe'); });

Route::get('/pledge', function () { return view('layouts.pledge'); });

Route::get('/Pledge', function () { return view('layouts.pledge'); });

Route::get('/WhyImRunning', function () { return view('layouts.WhyImRunning'); });

Route::get('/district', function () { return view('layouts.district'); });

Route::get('/Plan', function () { return view('layouts.plan'); });

Route::get('/donate', function () { return view('layouts.donate'); });
Route::get('/Donate', function () { return view('layouts.donate'); });

Route::get('/FoxworthVersusWeber', function () { return view('layouts.versus'); });
