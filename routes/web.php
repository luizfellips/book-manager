<?php

use Inertia\Inertia;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/navigation-items', [NavigationController::class, 'index'])->name('navigation');
Route::get('/about', [HomeController::class, 'about'])->name('about');


// Books
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**
     * admin management routes
     */
    Route::middleware([IsAdmin::class])->name('admin.')->group(function () {
        /**
         * all routes start with /admin
         * and all route names start with admin.
         */
        Route::get('/admin', [AdminController::class, 'index'])->name('index');

        Route::prefix('/admin')->group(function () {
            Route::get('users/{user}/confirm', [AdminUsersController::class, 'delete'])->name('users.delete.confirm');

            Route::resource('users', AdminUsersController::class)
                ->parameters(['users' => 'user'])
                ->except('show');
        });
    });
});



require __DIR__ . '/auth.php';
