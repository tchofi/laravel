<?php
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\PostController;



//TOKEN : 1842-6162-9491-5203-2156
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


 Route::get('/', [HomeController::class, "index"]);
// Route::get('/contact', [ContactController::class, "contact"]);

// Route::get('/a-propos', [HomeController::class, "aPropos"]);
// Route::get('/faq', [HomeController::class, "FAQ"]);
// Route::get('/historique', [HomeController::class, "Historique"]);

// Route::get("hello",function(){
//     return response()->json([
//         'title' => 'mon super titre',
//         'dsecription' => 'ma super description',

//     ]);
// });

//Formation

//  Route::get('/', [HomeController::class, 'index']);
//  Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id');
//  Route::get('/contact', [PostController::class, 'contact']);



Route::get('/article', 'App\Http\Controllers\PostController@index');
Route::get('/article',[PostController::class,'index']);
Route::get('/post/{id}',[PostController::class,'show']);
Route::get('/contact',[PostController::class,'contact']);

Route::get('/dashboard',[HomeController::class, 'dashboard'])->name( 'dashboard');
Route::get('/login', [HomeController::class, 'login']);
route::get('/regular', [HomeController::class, 'regularTable'])->name('regular');
Route::get('/chart', [HomeController::class, 'chart'])->name('chart');
Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
Route::get('/grid', [HomeController::class, 'grid'])->name('grid');
Route::get('/login',[HomeController::class, 'loginContent'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/lock', [HomeController::class, 'lock'])->name('lock');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/timeline', [HomeController::class, 'timeline'])->name('timeline');
Route::get('/user', [HomeController::class, 'user'])->name('user');
Route::get('/error', [HomeController::class, 'error'])->name('error');
Route::get('/buttons', [HomeController::class, 'buttons'])->name('buttons');
Route::get('/panels', [HomeController::class, 'panels'])->name('panels');
Route::get('/sweet-alert', [HomeController::class, 'sweetAlert'])->name('sweet-alert');