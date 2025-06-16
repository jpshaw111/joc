<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use App\Models\Contractor;
use App\Models\JobOrderStatement;
use App\Models\JobOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobOrderStatementController extends Controller
{

    public function index(Request $request) {
        $contractors = Contractor::all();
        $conductors = Conductor::all();

         $month = $request->input('month', now()->format('Y-m'));

         $jobOrders = JobOrder::with('typeOfWork')
        ->whereYear('jos_date', date('Y', strtotime($month)))
        ->whereMonth('jos_date', date('m', strtotime($month)))
        ->get()
        ->groupBy(function ($job) {
            return $job->contractor_id . '-' . $job->conductor_id;
        });

        $groupedJOs = [];

        foreach ($jobOrders as $key => $group) {
        $groupedJOs[$key] = [
            'jobOrders' => $group
        ];
    }

        return view('job-order-statements.index', compact('contractors','conductors', 'groupedJOs'));
    }

    public function generateJOS(Request $request) {
        $contractors = Contractor::all();
        $conductors = Conductor::all();
                return view('job-order-statements.generate', compact('contractors','conductors'));
    }





    public function store(Request $request) {

        $contractor_id  = $request->contractor_id;
        $conductor_id   = $request->conductor_id;
        $month          = $request->month;
        $paid_amount    = $request->paid_amount;
        $balance_amount = $request->balance_amount;

        // Extract month parts
        $monthYear = explode('-', $request->month);
        $year = $monthYear[0];
        $month = $monthYear[1];

       // Find matching job orders
        $jobOrders = JobOrder::with('typeOfWork')
                        ->where('contractor_id', $request->contractor_id)
                        ->where('conductor_id', $request->conductor_id)
                        ->whereYear('jos_date', $year)
                        ->whereMonth('jos_date', $month)
                        ->get();

    if ($jobOrders->isEmpty()) {
        return back()->with('error', 'No job orders found for this group.');
    }

       $totalAmount = $jobOrders->sum(function ($job) {
            return $job->actual_work_completed * $job->typeOfWork->rate;
        });

    $total_job_orders = $jobOrders->count();

    $referenceNumber = "JOS-" .$year.$month. "-" . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);

    $data = new JobOrderStatement();
    
    $data->reference_number     = $referenceNumber;
    $data->total_job_orders     = $total_job_orders;
    $data->total_amount         = $totalAmount;
    $data->paid_amount          = $paid_amount;
    $data->balance_amount       = $balance_amount;
    $data->created_at           = date("Y-m-d H:i:s");
    $data->updated_at           = date("Y-m-d H:i:s");

    $data->save();

    foreach ($jobOrders as $jobOrder) {
    DB::table('jos_job_order_links')->insert([
        'job_order_statement_id' => $data->id,
        'job_order_id' => $jobOrder->id,
    ]);
}


return redirect( route('create-job-order-statements')."?month=".request('month') )->with('success', 'Job Order Statement created successfully.');




    }



    public function viewJOS() {
        
        $statements = JobOrderStatement::latest()->get();     
    
        return view("job-order-statements.view", compact('statements'));
    }

    public function viewJobOrderByJOS($id) {
        $result = DB::table('jos_job_order_links')
                        ->select('job_orders.reference_number','job_orders.actual_work_completed', 'type_of_works.*')
                        ->join('job_orders', 'job_orders.id', '=', 'jos_job_order_links.job_order_id')
                        ->join('type_of_works', 'job_orders.type_of_work_id', '=', 'type_of_works.id')
                        ->where('jos_job_order_links.job_order_statement_id', '=', $id)
                        ->get();
        return view('job-order-statements.view-job-orders-by-jos', compact('result'));
    }
}
