<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestInvokableController;
use Illuminate\Support\Facades\Route;

function getUsers()
{
    return [
        1 => ['name' => 'Nguyen Van A', 'phone' => '84907888333', 'city' => 'Dak Nong',],
        2 => ['name' => 'Nguyen Van B', 'phone' => '84907888333', 'city' => 'Dak Lak',],
        3 => ['name' => 'Nguyen Van C', 'phone' => '84907888333', 'city' => 'Dak Mil',],
        4 => ['name' => 'Nguyen Van D', 'phone' => '84907888333', 'city' => 'Dak Dak',],
    ];
}
;

Route::get('/test', TestInvokableController::class);

Route::controller(TestController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/user/{id}', 'user')->name('user');
});

// Route::get('/', [TestController::class, 'index'])->name('home');
// Route::get('/blog', [TestController::class, 'blog'])->name('blog');
// Route::get('/user/{id}', [TestController::class, 'user'])->name('user');

// Route::get('/user/{id}', function ($id = null) {
//     $users = getUsers();
//     // dd($users[$id]);
//     abort_if(!isset($users[$id]), 403);
//     $user = $users[$id];
//     return view('pages.test-user', compact('id', 'user'));
// })->name('user');
// Route::get('/welcome', function () {
//     $names = getUsers();
//     return view('pages.test', compact('names'));
// });


// Route::prefix('page')->group(function () {
//     Route::get('products/{id?}/{context?}', [ProductsController::class, 'index'])->whereNumber('id')->name('pros');
//     Route::get('categories/', [CategoriesController::class, 'index'])->name('catalogs');
// });

// // Route::fallback([HomeController::class, 'index']);