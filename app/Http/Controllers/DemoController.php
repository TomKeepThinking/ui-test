<?php

namespace App\Http\Controllers;

class DemoController extends Controller
{
    public function __invoke()
    {

        return view('pages.demo');
    }
}
