<?php

View::composer('*', function($view)
{
    $routeActive = Route::currentRouteName();
    $route = explode('.', $routeActive);
    $view
        ->with('routeActive', $routeActive)
        ->with('route', $route);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Group Panel
Route::namespace('Panel')->prefix('panel')->group(function (){

    //Route Main
    Route::get('main/index', 'MainController@index')->name('panel.main.index');

});
