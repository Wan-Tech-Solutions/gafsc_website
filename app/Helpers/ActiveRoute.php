<?php

use Illuminate\Support\Facades\Route;

function active_route($route, $output = 'active')
{
    if (Route::currentRouteName() == $route) {
        return $output;
    }
}
