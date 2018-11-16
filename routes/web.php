<?php 

// for change languge
Route::get('langauage/{locale}', function ($locale) {
  if (in_array($locale, \Config::get('app.locales'))) {
    Session::put('locale', $locale);
  }
  return redirect()->back();
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//user confirmation register
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');


Route::get('/home', 'HomeController@index')->name('home');
