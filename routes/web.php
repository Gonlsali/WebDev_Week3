<?php

use App\Http\Controllers\ProjectController;
use App\Models\Project;
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

Route::view(
    '/',
    'index',
    [
        "pagetitle" => "Library",
        "maintitle" => "Welcome to My Library"
    ]
);

Route::view(
    '/aboutus',
    'about',
    [
        "pagetitle" => "About Us",
        "maintitle" => "About My Library"
    ]
);

Route::view(
    '/contactus',
    'contact',
    [
        "pagetitle" => "Contact Us",
        "maintitle" => "Contact Data"
    ]
);

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/projects/{code}', [ProjectController::class, 'show']);

Route::view(
    '/viewcontacts',
    'viewcontacts',
    [
        "pagetitle" => "View Contacts",
        "maintitle" => "View Contacts"
    ]
);
