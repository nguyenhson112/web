<?php

use App\Http\Controllers\backend\action\AddProductController;
use App\Http\Controllers\backend\action\AddTypeProController;
use App\Http\Controllers\backend\action\AddUserController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ImageUploadController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ProductTypeController;
use App\Http\Controllers\backend\RegisterController;
use App\Http\Controllers\backend\UsersController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\DetailController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LoginClientController;
use App\Http\Controllers\frontend\OderDetailController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\frontend\OrderDetailController;
use App\Http\Controllers\frontend\ProductController as AppProductController;
use App\Http\Controllers\frontend\RegisterClientController;
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
//     return view('welcome');
// });

//*******Backend

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'postLogin'])->name('postLogin');
//logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/post-register', [RegisterController::class, 'postRegister'])->name('postRegister');
//checkmiddleware
Route::group(['prefix' => 'admin',  'middleware' => 'checkLogin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    //sanpham
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/add-product', [ProductController::class, 'indexProduct'])->name('addProduct');
    Route::post('/add-product', [ProductController::class, 'addProduct'])->name('addProducts');
    Route::get('/edit-product/{id}', [ProductController::class, 'indexEdit'])->name('editProduct');
    Route::post('/edit-product/{id}', [ProductController::class, 'postEdit'])->name('postEditProduct');
    Route::get('product/{id}/delete', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

    //loaisanpham
    Route::get('/producttype', [ProductTypeController::class, 'index'])->name('ProductType');
    Route::get('/add-type', [ProductTypeController::class, 'indexType'])->name('addType');
    Route::post('/add-type', [ProductTypeController::class, 'addType'])->name('addTypes');
    Route::get('/edit-type/{id}', [ProductTypeController::class, 'indexEdit'])->name('editType');
    Route::post('/edit-type/{id}', [ProductTypeController::class, 'postEdit'])->name('postEditType');
    Route::get('type/{id}/delete', [ProductTypeController::class, 'deleteType'])->name('deleteType');

    //user
    Route::get('/user', [UsersController::class, 'index'])->name('User');
    Route::get('/add-user', [UsersController::class, 'indexAdd'])->name('addUser');
    Route::post('/add-user', [UsersController::class, 'addUser'])->name('addUsers');
    Route::get('/edit-user/{id}', [UsersController::class, 'indexEdit'])->name('editUser');
    Route::post('/edit-user/{id}', [UsersController::class, 'postEdit'])->name('postEditUser');
    Route::get('user/{id}/delete', [UsersController::class, 'deleteUser'])->name('deleteUser');
});



//*******Frontend
//login
Route::get('/loginclient', [LoginClientController::class, 'login'])->name('loginClient');
Route::post('/loginclient', [LoginClientController::class, 'postLogin'])->name('postLoginClient');
//logout
Route::get('/logoutclient', [LoginClientController::class, 'logout'])->name('logoutClient');
//register
Route::get('/registerclient', [RegisterClientController::class, 'Register'])->name('registerClient');
Route::post('/post-registerclient', [RegisterClientController::class, 'postRegister'])->name('postRegisterClient');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/fproduct', [AppProductController::class, 'index'])->name('product.list');
Route::get('/fproduct/{id}', [AppProductController::class, 'indexTypeProduct'])->name('typeProduct');
Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');
Route::group(['middleware' => 'CheckLoginClient'], function () {
    //sanpham
    Route::post('/addtocart', [DetailController::class, 'addtocart'])->name('addtocart');

    //dathang
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::match(['get', 'post'], '/add-to-cart/{id}', [CartController::class, 'addtocart'])->name('cart.add');
    Route::put('/edit', [CartController::class, 'edit'])->name('cart.edit');
    Route::get('/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');

    Route::get('/pay', [OrderController::class, 'create'])->name('order.create');
    Route::post('/pay', [OrderController::class, 'store'])->name('order.store');
    Route::get('/result', [OrderController::class, 'done'])->name('order.done');
    Route::get('/orderdetail/{id}', [OrderDetailController::class, 'orderdetail'])->name('order.detail');
});
