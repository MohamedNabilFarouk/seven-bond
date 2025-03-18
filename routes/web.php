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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function() {
Route::get('/clear', function() {
    $exitCode = Artisan::call('config:clear');
     return 'clear';
});
Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/dashboard', function () {
    return redirect()->route('dashboard');
});


// site route
Route::get('/', 'HomeController@index')->name('home');
Route::get('/products', 'HomeController@allShop')->name('Allshop');
Route::get('/products/{category_id}', 'HomeController@shop')->name('shop');
Route::get('/product/{slug}', 'HomeController@productDetails')->name('product.details');
Route::get('/blog/{slug}', 'HomeController@blogDetails')->name('blog.details');
Route::get('/blogs/', 'HomeController@blogs')->name('all.blogs');
Route::post('/subscribe/', 'HomeController@subscribe')->name('add.subscriber');
Route::get('/aboutus', 'HomeController@about')->name('about');
Route::get('/contactus', 'HomeController@contact')->name('contact');
Route::post('/sendMessage', 'HomeController@set_contactus')->name('sendMessage');

// Route::get('/Product/{id}', 'HomeController@details')->name('details');





Auth::routes(['register' => false]);
Route::group(['middleware' => ['role:admin','auth']],function(){


// admin route
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('/product','productController');
Route::get('AddProduct','productController@create')->name('product.create');
Route::resource('/service','servicesController');
Route::resource('/category','CategoriesController');
Route::resource('/team','TeamController');
Route::resource('/blog','blogsController');
Route::get('AddBlog','blogsController@create')->name('blog.create');

Route::resource('/chooseUs','chooseUsController');


Route::resource('/user','UsersController');
Route::resource('/message','ContactusController');
Route::resource('/subscribers','SubscribeController');

  /* Site Settings Routes */
  Route::get('site_settings', 'SiteSettingController@generalShow')->name('settings.site.show');
  Route::get('site_settings/customSections', function(){
        return view('admin.settings.site.custom_sections.about_section_2');   
  })->name('settings.site.aboutsec');
  Route::put('site_settings', 'SiteSettingController@generalUpdate')->name('settings.site.update');

  Route::get('social_settings', 'SiteSettingController@socialShow')->name('settings.social.show');
  Route::put('social_settings', 'SiteSettingController@socialUpdate')->name('settings.social.update');



});







Route::group(['middleware' => ['auth']], function() {

Route::get('changePassword','UsersController@getChangePass')->name('get.changePass');
Route::post('dochangePassword','UsersController@changePass')->name('do.changePass');



});


    });