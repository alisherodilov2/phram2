<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/index/{lang}', function ($lang) {
    Session::put('lang', $lang);
    App::setLocale($lang);

    return redirect()->back();
})->name('change.lang');
Route::group(['middleware' => 'language'], function () {
    Route::get('/', function () {
        return view('frontend.leadingpage.index');
    });
    Route::get('blogs/{id}', [App\Http\Controllers\Frontend\BlogController::class, 'show'])->name('blog.show');
    Route::get('blogs', [App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('frontend.blogs');
    Route::get('products' ,[App\Http\Controllers\Frontend\ProductsController::class , 'index'])->name('frontend.products');
    Route::get('/vacancy' , [App\Http\Controllers\Frontend\VacancyController::class , 'index'])->name('frontend.vacancy');
    Route::get('vacansy/show/{id}' , [App\Http\Controllers\Frontend\VacancyController::class , 'show'])->name('frontend.vacancy.show');
});
Route::get("/login", [App\Http\Controllers\Auth\AuthController::class, 'login'])->name("login");
Route::get("/logout", [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name("auth.logout");
Route::post("/login/auth", [App\Http\Controllers\Auth\AuthController::class, 'authLogin'])->name("login.auth");
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::resource("users", App\Http\Controllers\Admin\UserController::class);
    Route::resource('projects', App\Http\Controllers\Admin\ProjectsController::class);
    Route::resource('partner', App\Http\Controllers\Admin\PartnerContorller::class);
    Route::resource("filillar", App\Http\Controllers\Admin\FiliallarController::class);
    Route::resource("vacancy", App\Http\Controllers\Admin\VacancyController::class);
    Route::resource("products", App\Http\Controllers\Admin\ProductsController::class);
    Route::resource("contact", App\Http\Controllers\Admin\ContactController::class);
    Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
});
//frontend page