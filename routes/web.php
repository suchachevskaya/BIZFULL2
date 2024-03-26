<?php
use App\Http\Livewire\CreateProject;
use App\Http\Livewire\ViewProjects;
use Illuminate\Support\Facades\Route;
use App\Livewire\CardComponent;

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

Route::get('/', function () {
    return view('welcome');
})->name('');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware(['auth'])->group(function () {

    Route::get('/create-project', function () {
        return view('create-projects');
    })->name('create-project');

    Route::get('/view-projects', function () {
        return view('view-projects');
    })->name('view-projects');

});
Route::get('/projects/{id}', function ($id) {
    return view('project-page', ['id'=>$id]);
})->name('project-page');
Route::get('/notification-page', function () {
    return view('notification-page');
})->name('notification-page');



