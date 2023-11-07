<?php

namespace App\Http\Controllers;

class WorkPageController extends Controller
{
    public function __invoke()
    {
        return view('pages.work');
    }
}
