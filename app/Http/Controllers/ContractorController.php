<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use Illuminate\Http\Request;

class ContractorController extends Controller
{
    public function index() {
        return view('contractors.index');
    }

    public function show() {
        $result = Contractor::all();
        return view('contractors.show', compact('result'));
    }

    public function edit($id){
       $result = Contractor::findORFail($id);
       return view('contractors.edit', compact('result'));
    }
}
