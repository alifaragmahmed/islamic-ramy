<?php

// use Symfony\Component\HttpFoundation\File\File;
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
Route::get('/lang', 'LangController@index')->name('front.lang');

Route::get('/', 'HomeController@index')->name('front.home');

Route::get('/about', 'AboutController@index')->name('front.about');

Route::get('/contact', 'ContactController@index')->name('front.contact');
Route::post('/contact', 'ContactController@send')->name('front.contact.send');
Route::get('/gallery', 'GalleryController@index')->name('front.gallery');

Route::get('/projects', 'ProjectController@index')->name('front.project');
Route::get('/projects/{id}', 'ProjectController@show')->name('front.project.show');

Route::get('/products', 'ProductController@index')->name('front.product');
Route::get('/products/{id}', 'ProductController@show')->name('front.product.show');

Route::get('/services', 'ServiceController@index')->name('front.service');
Route::get('/services/{id}', 'ServiceController@show')->name('front.service.show');

Route::get('/blogs', 'BlogController@index')->name('front.blog');
Route::get('/blogs/{id}', 'BlogController@show')->name('front.blog.show');

Route::get('/packages', 'PackageController@index')->name('front.package');
Route::get('/packages/{id}', 'PackageController@show')->name('front.package.show');

Route::get('/privacy-policy', function () {
    return view('front.terms.index');
})->name('front.privacy');

Route::get('/terms', function () {
    return view('front.terms.index');
})->name('front.terms');
