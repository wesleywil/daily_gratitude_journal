<?php

namespace App\Http\Controllers;

use App\Models\TipMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $randomMsg = TipMessage::inRandomOrder()->first();

        if ($randomMsg) {
            $message = $randomMsg->message;
            return view('templates/header')
                . view('pages/homepage', ['message' => $message])
                . view('templates/footer');
        }

    }
}