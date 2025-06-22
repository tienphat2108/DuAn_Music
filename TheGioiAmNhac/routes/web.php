<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ArtistController;
use App\Models\Song;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Radio;
use App\Models\Chart;
use App\Models\Suggestion;

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

Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');
//Roles
Route::get('role', [RoleController::class, 'role'])->name('user.role');

Route::post('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('/trangchu', [HomepageController::class, 'index'])->name('homepage')->middleware('auth');

Route::get('/artists/{artist}', [ArtistController::class, 'show'])->name('artists.show');

Route::get('/', function () {
    $songs = Song::with('artist')->get();
    $artists = Artist::all();
    $albums = Album::with('artist')->get();
    $radios = Radio::all();
    $charts = Chart::all();
    $suggestions = Suggestion::all();
    return view('guest.welcome', compact('songs', 'artists', 'albums', 'radios', 'charts', 'suggestions'));
});

// Route cho form đăng ký và đăng nhập đẹp
Route::get('/dangky', function () {
    return view('auth.dangky');
})->name('dangky');

Route::get('/dangnhap', function () {
    return view('auth.dangnhap');
})->name('dangnhap');

Route::get('/khampha', function () {
    return view('guest.khampha');
})->name('khampha');

Route::get('/vechungtoi', function () {
    return view('guest.vechungtoi');
})->name('vechungtoi');
