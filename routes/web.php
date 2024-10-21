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

Route::get('/', function () {
    $title = 'Homepage';
    $description = 'La mia prima Homepage con Laravel';
    $linksHeader = [
        'Home' => '/',
        'Articles' => '/articles',
        'About' => '/about'
    ];

    return view(
        'homepage',
        compact('title', 'description', 'linksHeader')
    );
});

Route::get('/articles', function () {
    $title = 'Articles';
    $description = 'La mia pagina di articoli con Laravel';
    $linksHeader = [
        'Home' => '/'
    ];

    return view(
        'articles',
        compact('title', 'description', 'linksHeader')
    );
});

Route::get('/about', function () {
    $title = 'About';
    $description = 'La mia pagina About con Laravel';
    $linksHeader = [
        'Home' => '/'
    ];

    return view(
        'about',
        compact('title', 'description', 'linksHeader')
    );
});