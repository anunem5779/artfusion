<?php

// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FPicturesController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardController;



Route::get('/', [FPicturesController::class, 'show']);
Route::get('/products', [\App\Http\Controllers\PicturePageController::class, 'index']);



Auth::routes();
Route::middleware(App\Http\Middleware\UserMiddleware::class)->group(function(){


});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(App\Http\Middleware\AdminMiddleware::class)->group(function(){
    Route::get('pictures/create', [App\Http\Controllers\PicturesController::class,'create'])->name('gallery-create');
    Route::post('pictures/save', [App\Http\Controllers\PicturesController::class, 'save']);
    Route::get('pictures/index',[App\Http\Controllers\PicturesController::class, 'index'])->name('gallery-index');
});



Route::get('pictures/edit/{item}',[App\Http\Controllers\PicturesController::class, 'edit']);
Route::post('pictures/update/{item}', [App\Http\Controllers\PicturesController::class, 'update']);
Route::post('pictures/delete',[App\Http\Controllers\PicturesController::class, 'delete']);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/auction', [AuctionController::class, 'index'])->name('auction');
Route::get('/offers', [OffersController::class, 'index'])->name('offers');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/', [GalleryController::class, 'index'])->name('art.index');
Route::get('/artwork/create', [GalleryController::class, 'createArtwork'])->name('art.createArtwork');
Route::post('/artwork/store', [GalleryController::class, 'storeArtwork'])->name('art.storeArtwork');

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/admin-login', [AuthController::class, 'showAdminLogin'])->name('admin.login');
Route::post('/admin-login', [AuthController::class, 'adminLogin']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Redirect the root URL to the login page
Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/admin-login', [AuthController::class, 'showAdminLogin'])->name('admin.login');
Route::post('/admin-login', [AuthController::class, 'adminLogin']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Admin Dashboard Route 
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth', 'admin');

// Gallery Route for regular users
// Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'index'])->name('gallery');