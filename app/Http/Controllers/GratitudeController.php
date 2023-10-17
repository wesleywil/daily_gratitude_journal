<?php

namespace App\Http\Controllers;

use App\Models\Gratitude;
use App\Models\TipMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GratitudeController extends Controller
{

    public function index()
    {
        $randomMsg = TipMessage::inRandomOrder()->first();

        if ($randomMsg) {
            $message = $randomMsg->message;
            return view('templates/header')
                . view('pages/gratitude/gratitude_create', ['message' => $message])
                . view('templates/footer');
        }
    }

    public function all(Request $request)
    {
        $query = $request->input('search');
        if (empty($query)) {
            $gratitudes = Gratitude::all();
        } else {
            $gratitudes = Gratitude::whereYear('created_at', $query)->get();
        }


        return view('templates/header')
            . view('pages/gratitude/gratitude', ['gratitudes' => $gratitudes])
            . view('templates/footer');
    }

    public function show(string $id)
    {
        $gratitute = Gratitude::find($id);

        if (empty($gratitute)) {
            return view('templates/header')
                . view('pages/utils/not_found', ['message' => 'Gratitude Message Does Not Exist'])
                . view('templates/footer');
        } else {
            return view('templates/header')
                . view('pages/gratitude/gratitude_details', ['gratitude' => $gratitute])
                . view('templates/footer');
        }
    }
    public function store(Request $request)
    {
        if (empty($request->input('message'))) {
            return redirect('/')->with('msg', 'The message field is required.');
        }
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
        $gratitude->userId = Auth::user()->id;
        $gratitude->save();
        return redirect('/gratitude')->with('msg', 'Message added successfully!');




    }

    public function update(Request $request, string $id)
    {
        if (empty($request->input('message'))) {
            return redirect()->route('gratitude', [$id])->with('msg', 'The message field is required.');
        }
        $validated = $request->validate(
            [
                'message' => 'required'
            ],
            [
                'message.required' => 'The message field is required.'
            ]
        );
        $gratitude = Gratitude::find($id);
        $gratitude->message = $validated['message'];
        $gratitude->userId = Auth::user()->id;
        $gratitude->save();
        return redirect('/gratitude');


    }

    public function delete(Request $request, string $id)
    {
        $gratitude = Gratitude::find($id);
        if ($gratitude) {
            if ($request->isMethod('POST')) {
                $gratitude->delete();
                return redirect('/gratitude');
            }
            return view('templates/header')
                . view('pages/gratitude/gratitude_delete', ['gratitude' => $gratitude])
                . view('templates/footer');
        }
        return view('templates/header')
            . view('pages/utils/not_found', ['message' => 'Gratitude Message Does Not Exist'])
            . view('templates/footer');


    }
}