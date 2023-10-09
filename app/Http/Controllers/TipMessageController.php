<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipMessage;

class TipMessageController extends Controller
{
    public function index()
    {
        $tipMessages = TipMessage::all();
        return view('pages/test_messages', ['tipMessages' => $tipMessages]);
    }
}