<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
    public function index()
    {
        return view('create');
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'namaevent' => 'required',
            'deskripsi' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/create')
                ->withErrors($validator)
                ->withInput();
        }

        Form::create([
            'namaevent' => $request->input('namaevent'),
            'deskripsi' => $request->input('deskripsi'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);

        $request->session()->flash('message', 'Event berhasil diajukan!');

        return redirect('/create');
    }
}
