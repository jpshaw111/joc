<?php

namespace App\Http\Controllers;

use App\Models\TypeOfWork;
use Illuminate\Http\Request;

class TypeOfWorkController extends Controller
{
    public function index() {
        return view('typeOfWork.index');
    }

    public function show() {
        $result = TypeOfWork::all();
        return view('typeOfWork.show', compact('result'));
    }

    public function edit($id){
       $result = TypeOfWork::findORFail($id);
       return view('typeOfWork.edit', compact('result'));
    }
}
