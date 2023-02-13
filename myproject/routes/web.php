<?php

use Symfony\Component\ErrorHandler\Debug;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Database\Connectors\PostgresConnector;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;

// use Barryvdh\Debugbar\Twig\Extension\Debug;
// use Barryvdh\Debugbar\Facade as Debugbar;


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
    // Debugbar::info('ymani');
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    // GET
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [CategoryController::class, 'create']);
    Route::get('edit-category/{category_id}', [CategoryController::class, 'edit']);
    Route::get('delete-category/{category_id}', [CategoryController::class, 'destroy']);
    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('user/{user_id}', [UserController::class,  'edit']);
    // Route::get('/{id}', [PostsController::class, 'show']);
    
    // POST
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    // Route::get('/create', [PostsController::class, 'create']);
    // Route::post('/', [PostsController::class, 'store']);
    
    // PUT OR PATCH
    // Route::get('/edit/{id}', [PostsController::class, 'edit']);
    // Route::patch('/{id}', [PostsController::class, 'update']);
    Route::put('update-category/{category_id}', [CategoryController::class, 'update']);
    Route::put('update-user/{user_id}', [UserController::class, 'update']);
    
    // DELETE
    // Route::delete('/{id}', [PostsController::class, 'destroy']);

});

// Route::resource('blog', PostgresConnector::class);

// Route for invoke method
// Route::get('/', HomeController::class);


// Multiple HTTP verbs
// Route::match(['GET', 'POST',], '/blog', [PostsController::class, 'index']);
// Route::any('/blog', [PostsController::class, 'index']);

// Return view
// Route::view('/blog', 'blog.index', ['name' => 'Code With yhammani']);

// Fallback Route
// Route::fallback(FallbackController::class);

