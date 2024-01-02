<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class NavColorViewComposer
{
    public function compose(View $view)
    {
        $navBg = '';

        $route = Route::is('pages.work.*');

        if($route){
//            TODO: Get work page styles
            $navBg = 'bg-teal';
        }

        $view->with('navBg', $navBg);
    }
}
