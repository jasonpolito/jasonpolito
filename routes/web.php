<?php

use Illuminate\Support\Facades\Route;

$routes = [
    'home',
    'test',
];

Route::get('/', function () {
    return redirect()->route('home');
});

foreach ($routes as $route) {
    Route::get("/{$route}", function () use ($route) {
        return view($route);
    })->name($route);
}
