<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

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

Auth::routes();

/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/
// Route::get('/', [App\Http\Controllers\User\HomeController::class, 'top'])->name('top');
Route::get('/', 'User\HomeController@top')->name('top');

/*
|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth']], function() {
    Route::get('index', 'User\HomeController@index')->name('user.index');
    Route::get('show{id}', 'User\HomeController@show')->name('user.show');
    Route::get('edit{id}', 'User\HomeController@edit')->name('user.edit');
    Route::post('update{id}','User\HomeController@update')->name('user.update');
    Route::get('serch', 'User\HomeController@serch')->name('serch');
    Route::get('home', 'User\HomeController@home')->name('user.home');
});
 
/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',         function () { return redirect('/admin/home'); });
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
});

/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home',      'Admin\HomeController@index')->name('admin.home');
    Route::get('product/new', 'ProductsController@new')->name('product.new');
    Route::post('product/new', 'ProductsController@create')->name('product.create');
    Route::get('product/{id}/edit', 'ProductsController@edit')->name('product.edit');
    Route::patch('product/{id}/edit', 'ProductsController@update')->name('product.update');
    Route::delete('product/{id}/edit', 'ProductsController@delete')->name('product.delete');
});
