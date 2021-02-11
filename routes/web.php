<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('speaker/{speaker}', 'HomeController@view')->name('speaker');
Route::redirect('/home', '/');
//Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);
Auth::routes(['verify' => true]);
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::group(['namespace' => 'Auth'],function(){
    // Authentication Routes...
    Route::get('logout', 'LoginController@logout')->name('logout');
    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token');
    Route::post('password/reset', 'ResetPasswordController@reset');
});
//INVITATION
Route::get('participants/registration/{token}', 'InvitationController@invite');

Route::resource('/email/activation/1p4m$&s3lf2O20%','EmailActivationController');

Route::post('/emailActivation','EmailActivationController@emailActivation')->name('emailActivation');


Route::get('/EmailVerification','EmailActivationController@EmailVerification')->name('EmailVerification');


Route::group(['prefix' => 'users', 'as' => 'users.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('change-password', 'ChangePasswordController@change_password')->name('password.change_password');
    Route::post('change-password', 'ChangePasswordController@store')->name('change.password');


});



Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('id_card', 'IDController');

    Route::get('id_card/index', 'IDController@print');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersControllerController@destroy')->name('users.destroy');
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Bilaterals
    Route::delete('bilaterals/destroy', 'BilateralControllerController@destroy')->name('bilaterals.destroy');
    Route::delete('bilaterals/destroy', 'BilateralController@massDestroy')->name('bilaterals.massDestroy');
    Route::resource('bilaterals', 'BilateralController');
    Route::put('bilaterals/accept/{id}', 'BilateralController@accept')->name('bilaterals.accept');
    Route::get('bilaterals/decline/{id}', 'BilateralController@decline')->name('bilaterals.decline');
    Route::put('bilaterals/decline_update/{id}', 'BilateralController@decline_update')->name('bilaterals.decline_update');
    Route::get('bilaterals/cancel/{id}', 'BilateralController@cancel')->name('bilaterals.cancel');
    Route::put('bilaterals/cancel_update/{id}', 'BilateralController@cancel_update')->name('bilaterals.cancel_update');



    // Attendees
    Route::delete('attendees/destroy', 'GroupRegistrationController@massDestroy')->name('attendees.massDestroy');
    Route::post('attendees/media', 'GroupRegistrationController@storeMedia')->name('attendees.storeMedia');
    Route::resource('attendees', 'GroupRegistrationController');

    // Participants
    Route::delete('participants/destroy', 'ParticipantController@destroy')->name('participants.destroy');
    Route::delete('participants/destroy', 'ParticipantController@massDestroy')->name('participants.massDestroy');
    Route::resource('participants', 'ParticipantController');
    Route::post('participants/registration', 'ParticipantController@invitation')->name('participants.invitation');

    // Profiles
    //Route::delete('profile/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('profiles', 'ProfileController');
    // Route to show user avatar
    Route::post('admin/profiles/upload', 'ProfileController@upload')->name('profiles.upload');
//    Route::get('images/profile/{id}/avatar/{image}', [
//        'uses' => 'ProfileController@userProfileAvatar',
//    ]);
    //////////
    Route::post('profiles/media', 'ProfileController@storeMedia')->name('profiles.storeMedia');

    //////////
    // Route to upload user avatar.
    Route::post('admin/profiles/upload', ['as' => 'admin.profiles.upload', 'uses' => 'ProfileController@upload']);
    Route::post('profiles/upload', 'ProfileController@upload')->name('profiles.upload');
    Route::match(['get', 'post'], 'profiles.upload', 'ProfileController@ajaxImage');
    Route::delete('profiles.delete/{filename}', 'ProfileController@deleteImage');

    // Settings
    Route::delete('settings/destroy', 'SettingsController@massDestroy')->name('settings.massDestroy');
    Route::resource('settings', 'SettingsController');

    // Settings
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Speakers
    Route::delete('speakers/destroy', 'SpeakersController@massDestroy')->name('speakers.massDestroy');
    Route::post('speakers/media', 'SpeakersController@storeMedia')->name('speakers.storeMedia');
    Route::resource('speakers', 'SpeakersController');

    // Schedules
    Route::delete('schedules/destroy', 'ScheduleController@massDestroy')->name('schedules.massDestroy');
    Route::resource('schedules', 'ScheduleController');

    // Venues
    Route::delete('venues/destroy', 'VenuesController@massDestroy')->name('venues.massDestroy');
    Route::post('venues/media', 'VenuesController@storeMedia')->name('venues.storeMedia');
    Route::resource('venues', 'VenuesController');

    // Hotels
    Route::delete('hotels/destroy', 'HotelsController@massDestroy')->name('hotels.massDestroy');
    Route::post('hotels/media', 'HotelsController@storeMedia')->name('hotels.storeMedia');
    Route::resource('hotels', 'HotelsController');

    // Galleries
    Route::delete('galleries/destroy', 'GalleriesController@massDestroy')->name('galleries.massDestroy');
    Route::post('galleries/media', 'GalleriesController@storeMedia')->name('galleries.storeMedia');
    Route::resource('galleries', 'GalleriesController');

    // Sponsors
    Route::delete('sponsors/destroy', 'SponsorsController@massDestroy')->name('sponsors.massDestroy');
    Route::post('sponsors/media', 'SponsorsController@storeMedia')->name('sponsors.storeMedia');
    Route::resource('sponsors', 'SponsorsController');

    // Host Country
    Route::delete('host_country/destroy', 'HostCountryController@massDestroy')->name('host_country.massDestroy');
    Route::post('host_country/media', 'HostCountryController@storeMedia')->name('host_country.storeMedia');
    Route::resource('host_country', 'HostCountryController');

    // Faqs
    Route::delete('faqs/destroy', 'FaqsController@massDestroy')->name('faqs.massDestroy');
    Route::resource('faqs', 'FaqsController');

    // Amenities
    Route::delete('amenities/destroy', 'AmenitiesController@massDestroy')->name('amenities.massDestroy');
    Route::resource('amenities', 'AmenitiesController');

    // Prices
    Route::delete('prices/destroy', 'PricesController@massDestroy')->name('prices.massDestroy');
    Route::resource('prices', 'PricesController');
});
