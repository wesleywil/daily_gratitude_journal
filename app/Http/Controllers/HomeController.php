<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('templates/header')
            . view('pages/homepage')
            . view('templates/footer');
    }
}