
@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-md-12">

<div class="d-flex justify-content-between">
<div>
<h2>JOS Management</h2>

<form method="GET" action="" class="mb-4 row">
        <label class="col-sm-4 col-form-label">Filter by Month</label>
        <div class="col-sm-6">
            <input type="month" name="month" class="form-control" value="{{ request('month') }}">
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </form>
</div>

<div>

<a href="{{ route('view-jos') }}" class="btn btn-dark">View all JOS</a>

</div>

</div>


     @if (session('success'))

            <div class="alert alert-success"> {{ session('success') }}</div>
                
            @endif


    
    @if (!empty($groupedJOs))

        @foreach ($groupedJOs as $groupKey => $data)
        @php
            [$contractorId, $conductorId] = explode('-', $groupKey);
            $contractor = \App\Models\Contractor::find($contractorId);
            $conductor = \App\Models\Conductor::find($conductorId);
        @endphp




         <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <strong>Contractor:</strong> {{ $contractor->name }} |
                    <strong>Conductor:</strong> {{ $conductor->first_name }}
                </div>
               
                <a href="{{ route('generate-jos') }}?contractor_id={{ $contractorId }}&conductor_id={{ $conductorId }}&month={{ request('month') }}">Generate JOS</a>
            </div>
            <div class="card-body">
                <!-- Table of grouped job orders -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Job No</th>
                            <th>Work Type</th>
                            <th>Actual Work</th>
                            <th>Rate</th>                            
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach ($data['jobOrders'] as $job)
                            <tr>
                                <td>{{ $job->reference_number }}</td>
                                <td>{{ $job->typeOfWork->name }}</td>
                                <td>{{ $job->actual_work_completed }}</td>
                                <td>{{ $job->typeOfWork->rate }}</td>
                                <td>
                                    {{ $amt = $job->actual_work_completed * $job->typeOfWork->rate }}
                                    @php $total += $amt; @endphp
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="table-success">
                            <th colspan="4">Total</th>
                            <th>₹{{ $total }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    @endforeach


        
    @endif
    


</div>
</div>
    

     
   
@endsection
   