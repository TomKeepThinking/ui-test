<?php

namespace App\Http\Controllers;

class IdeasPageController extends Controller
{
    public function __invoke()
    {
        return view('pages.ideas');
    }
}
