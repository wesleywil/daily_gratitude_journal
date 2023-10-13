<?php

namespace App\Http\Controllers;

use App\Models\Gratitude;
use Illuminate\Http\Request;

class GratitudeController extends Controller
{

    public function index(Request $request)
    {
        $query = $request->input('search');
        if (empty($query)) {
            $gratitudes = Gratitude::all();
        } else {
            $gratitudes = Gratitude::whereYear('created_at', $query)->get();
        }


        return view('templates/header')
            . view('pages/gratitude', ['gratitudes' => $gratitudes])
            . view('templates/footer');
    }
    public function store(Request $request)
    {
        if (empty($request->input('message'))) {
            return redirect('/')->with('msg', 'The message field is required.');
        } else {
            $validated = $request->validate(
                [
                    'message' => 'required'
                ],
                [
                    'message.required' => 'The message field is required.'
                ]
            );
            $gratitude = new Gratitude;

            $gratitude->message = $validated['message'];

            $gratitude->save();
            return redirect('/')->with('msg', 'Message added successfully!');

        }


    }
}