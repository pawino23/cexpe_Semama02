<?php

namespace App\Helpers;

class NavigationHelper
{
    public static function isActiveRoute($route)
    {
        return request()->is($route) ? 'activo' : '';
    }
}