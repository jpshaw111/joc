<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use App\Models\Contractor;
use App\Models\JobOrder;
use App\Models\TypeOfWork;
use Illuminate\Http\Request;

class JobOrderController extends Controller
{
    public function index() {
        $contractors = Contractor::all();
        $conductors = Conductor::all();
        $typeOfWorks = TypeOfWork::all();
        return view('job-orders.index', compact('contractors', 'conductors', 'typeOfWorks'));
    }

    public function show() {
        $result = JobOrder::all();
        return view('job-orders.show', compact('result'));
    }

    public function edit($id){
       $result = JobOrder::findORFail($id);
        $contractors = Contractor::all();
        $conductors = Conductor::all();
        $typeOfWorks = TypeOfWork::all();
       return view('job-orders.edit', compact('result','contractors', 'conductors', 'typeOfWorks'));
    }
}
