<?php 

// for change languge
Route::get('langauage/{locale}', function ($locale) {
  if (in_array($locale, \Config::get('app.locales'))) {
    Session::put('locale', $locale);
  }
  return redirect()->back();
});


/* error handling  */
Route::get('404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);
Route::get('405',['as'=>'405','uses'=>'ErrorHandlerController@errorCode405']);
Route::get('500',['as'=>'500','uses'=>'ErrorHandlerController@errorCode500']);
/* error handling  */


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//user confirmation register
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/user-2/verify/{token}', 'Auth2\RegisterController@verifyUser');



//user1 login
Route::get('/home', 'HomeController@index')->name('home');



// user2
Route::group(['prefix' => 'user2'], function () { 
// Authentication Routes...
Route::get('/', 'Auth2\LoginController@showLoginForm')->name('user2.login');
Route::get('login', 'Auth2\LoginController@showLoginForm')->name('user2.login');
Route::post('login', 'Auth2\LoginController@login')->name('user2.login.submit');
Route::post('logout', 'Auth2\LoginController@logout')->name('user2.logout');

// Registration Routes...
Route::get('register', 'Auth2\RegisterController@showRegistrationForm')->name('user2.register');
Route::post('register', 'Auth2\RegisterController@register')->name('user2.register.submit');

// Password Reset Routes...
Route::get('password/reset', 'Auth2\ForgotPasswordController@showLinkRequestForm')->name('user2.password.reset');
Route::post('password/email', 'Auth2\ForgotPasswordController@sendResetLinkEmail')->name('user2.password.reset.submit');
Route::get('password/reset/{token}', 'Auth2\ResetPasswordController@showResetForm')->name('user2.password.reset.form');
Route::post('password/reset', 'Auth2\ResetPasswordController@reset')->name('user2.password.reset.form.submit');


    Route::get('/home', 'Home2Controller@index')->name('user2.home');
});