<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\form;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index(){
        return view('create');
    }

    public function create(){
        Validator::make(request()->all(),[
            'namaevent'=>'required',
            'deskripsi'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'
        ])->validate();
        form::create([
            'namaevent' => request('namaevent'),
            'deskripsi' => request('deskripsi'),
            'start_date' => request('start_date'),
            'end_date' => request('end_date')
        ]);
        return redirect('/create');    
    }
}
