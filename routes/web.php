<?php

use App\Http\Controllers\add_postController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\postsController;

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

Route::get('/', function () {
    return view('Accueil');
});

Route::get('/Accueil', function () {
    return view('Accueil');
})->name('Accueil');

Route::post('/Contact', [contactController::class,'show'])->name('affiche_Contact');

Route::get('/Contact', function () {
    return view('Contact');
})->name('Contact');

Route::get('/About', function () {
    return view('About');
})->name('About');


Route::get('/contact_US',[contactController::class, 'showcontact' ]
)->middleware(['auth'])->name('Contact_US');

Route::get('/Gerer_user/s{id}',[postsController::class, 'deleteuser' ]
)->middleware(['auth'])->name('Gerer_user_suprimer');

Route::get('/Gerer_user/m{id}',[postsController::class, 'modifuser' ]
)->middleware(['auth'])->name('Gerer_user_modifier');
Route::post('/Gerer_user/c{id}',[postsController::class, 'Cmodifuser' ]
)->middleware(['auth'])->name('Gerer_user_Cmodifier');


Route::get('/Gerer_user',[postsController::class, 'showuser' ]
)->middleware(['auth'])->name('Gerer_user');






Route::get('/dashboard',[postsController::class, 'show']
)->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/{k}{m}',[add_postController::class, 'create']
)->middleware(['auth'])->name('reserver_une_place');



Route::get('/Gerer_post/{id}',[postsController::class, 'delete']
)->middleware(['auth'])->name('Gerer_post_ajoute');

Route::get('/Profile',[postsController::class, 'Profile']
)->middleware(['auth'])->name('Profile');

Route::get('/Gerer_post',[postsController::class, 'show1']
)->middleware(['auth'])->name('Gerer_post');

Route::post('/Ajoute_Post',[postsController::class, 'create']
)->middleware(['auth'])->name('Ajoute_Post');


Route::get('/Ajoute_Post', function () {
    return view('ajoute_posts');
})->middleware(['auth'])->name('Ajoute_Post');

require __DIR__.'/auth.php';
