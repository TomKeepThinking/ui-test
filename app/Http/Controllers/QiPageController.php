<?php

namespace App\Http\Controllers;

class QiPageController extends Controller
{
    public function __invoke()
    {
        return view('pages.qi');
    }
}
