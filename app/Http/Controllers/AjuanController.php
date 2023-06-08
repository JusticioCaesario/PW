<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ajuan;


class AjuanController extends Controller
{
    public function index()
    {
        $ajuan = Ajuan::all();
        return view('ajuan', compact('ajuan'));
    }
    }
