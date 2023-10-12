<?php

namespace App\Http\Controllers;

use App\Models\Gratitude;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class GratitudeController extends Controller
{
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