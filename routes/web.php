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

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index')->name('index.index');

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/about', 'AboutController@index')->name('about.index');


//Route::get('/about', function () {
//    return view('about');
//});

Route::post('/mailing', 'MailingController@store')->name('mailing.store');
Route::post('/feedback', 'FeedbackController@store')->name('feedback.store');

Route::get('/account', 'AccountController@index')->name('account.index');

//Route::get('/account', function () {
//    return view('account');
//});

Route::get('/all-comments', function () {
    return view('all-comments');
});

Route::get('/c-e-categories', 'ReviewsController@create')->name('reviews.create');
Route::post('/post', 'ReviewsController@store')->name('reviews.store');

Route::get('/all-reviews', function () {
    return view('all-reviews');
});

Route::get('/blog', 'PostsController@index')->name('posts.index');
Route::get('/c-post', 'PostsController@create')->name('posts.create');
Route::post('/blog', 'PostsController@store')->name('posts.store');
Route::get('/blog/post/{id}', 'PostsController@show')->name('posts.show');
Route::get('/blog/post/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::PATCH('/blog/post/{id}', 'PostsController@update')->name('posts.update');


// Route::get('/blog', function () {
//     return view('blog');
// });

//Route::get('/c-e-categories', function () {
//    return view('c-e-categories');
//});
//
//Route::get('/c-e-post', function () {
//    return view('c-e-post');
//});
//
//Route::get('/c-e-product', function () {
//    return view('c-e-product');
//});

Route::get('/contacts', 'ContactsController@index')->name('contacts.index');

//Route::get('/contacts', function () {
//    return view('contacts');
//});

Route::get('/information', 'InformationController@index')->name('info.index');

//Route::get('/information', function () {
//    return view('information');
//});

Route::get('/menu', 'ProductsController@index')->name('product.index');

//Route::get('/menu', function () {
//    return view('menu');
//});

Route::get('/post', 'PostController@index')->name('post.index');

//Route::get('/post', function () {
//    return view('post');
//});

Route::get('/product', 'CategoriesItemController@index')->name('categoriesItem.index');
Route::get('/c-product'   , 'CategoriesItemController@create')->name('categoriesItem.create');
Route::post('/c-product', 'CategoriesItemController@store')->name('categoriesItem.store');
Route::get('/products/product/{id}', 'CategoriesItemController@show')->name('categoriesItem.show');
Route::get('/products/product/edit/{id}', 'CategoriesItemController@edit')->name('categoriesItem.edit');
Route::PATCH('/products/product/{id}', 'CategoriesItemController@update')->name('categoriesItem.update');

//Route::get('/product', function () {
//    return view('product');
//});

Route::get('/products', 'CategoriesController@index')->name('categories.index');
Route::get('/c-categories', 'CategoriesController@create')->name('categories.create');
Route::post('/menu', 'CategoriesController@store')->name('categories.store');
Route::get('/products/categories/edit/{id}', 'CategoriesController@edit')->name('categories.edit');
Route::PATCH('/products/{id}', 'CategoriesController@update')->name('categories.update');

Route::post('/product', 'CommentsController@create')->name('categoriesComments.create');
Route::post('/product', 'CommentsController@store')->name('categoriesComments.store');


//Route::get('/products', function () {
//    return view('products');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
