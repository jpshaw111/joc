<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
     public function index() {
        return view('conductors.index');
    }

    public function show() {
        $result = Conductor::all();
        return view('conductors.show', compact('result'));
    }

    public function edit($id){
       $result = Conductor::findORFail($id);
       return view('conductors.edit', compact('result'));
    }
}
