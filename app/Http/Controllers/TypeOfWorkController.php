<?php

namespace App\Http\Controllers;

use App\Models\TypeOfWork;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function saveTypeofWork(Request $request) {
        $request->validate([
            'name' => 'required',
            'rate' => 'required|numeric',
            'code' => 'required|unique:type_of_works,code'

        ]);

        $work = new TypeOfWork();
        $work->name = $request->name;
        $work->rate = $request->rate;
        $work->code = $request->code;

        $work->save();

        return back()->with('success', 'Type of work created successfully.');

    }

    public function updateTypeOfWork(Request $request) {
        $id = $request->id;
         $request->validate([
            'name' => 'required',
            'rate' => 'required|numeric',
            'code' => [
                'required',
                Rule::unique('type_of_works', 'code')->ignore($id)
            ]

        ]);

        

        $work = TypeOfWork::findOrFail($id);
        $work->name = $request->name;
        $work->rate = $request->rate;
        $work->code = $request->code;

        $work->update();

        return back()->with('success', 'Type of work updated successfully.');
    }


    public function deleteTypeOfWork($id) {
        $work = TypeOfWork::findOrFail($id);
        $work->delete();
        return back()->with('success', 'Type of work deleted successfully.');
    }
}
