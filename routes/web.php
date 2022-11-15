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

Route::get('/login', [HomeController::class, 'login']);
//Route Dashboard
Route::get('/dashboard',[HomeController::class, 'dashboard'])->name( 'dashboard');
//Route regular table (tableau régulier)
route::get('/regular', [HomeController::class, 'regularTable'])->name('regular');
//Route chart
Route::get('/chart', [HomeController::class, 'chart'])->name('chart');
//Route notifications
Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
//Route grid
Route::get('/grid', [HomeController::class, 'grid'])->name('grid');
//Route login
Route::get('/login',[HomeController::class, 'loginContent'])->name('login');
//Route inscription
Route::get('/register', [HomeController::class, 'register'])->name('register');
//Route lock
Route::get('/lock', [HomeController::class, 'lock'])->name('lock');
//Route pricing
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
//Route timeline
Route::get('/timeline', [HomeController::class, 'timeline'])->name('timeline');
//Route User
Route::get('/user', [HomeController::class, 'user'])->name('user');
//Route Error
Route::get('/error', [HomeController::class, 'error'])->name('error');
//Route Buttons
Route::get('/buttons', [HomeController::class, 'buttons'])->name('buttons');
//Route panels
Route::get('/panels', [HomeController::class, 'panels'])->name('panels');
//Route Sweet-alert
Route::get('/sweet-alert', [HomeController::class, 'sweetAlert'])->name('sweet-alert');
//Route Icons
Route::get('/icons', [HomeController::class, 'icons'])->name('icons');
//Route  Typography
Route::get('/typography', [HomeController::class, 'typography'])->name('typography');
//Route Regular Forms
Route::get('/regular-form', [HomeController::class, 'regularForm'])->name('regular-form');
//Route Extended Forms
Route::get('/extended-form', [HomeController::class, 'extendedForm'])->name('extended-form');
//Route Validation Forms
Route::get('/validation-form', [HomeController::class, 'ValidationForm'])->name('validation-form');
//Route Wizard
Route::get('/wizard', [HomeController::class, 'wizard'])->name('wizard');


