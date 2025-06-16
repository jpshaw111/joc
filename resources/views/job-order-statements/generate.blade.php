
@extends('layouts.app')

@section('content')
    
     <div class="row">

    <div class="col-md-12">
            <div class="d-flex justify-content-between">
            <h4>Generate JOS</h4>
            
            </div>

            <div class="col-md-12">

            
            @if (session('success'))

            <div class="alert alert-success"> {{ session('success') }}</div>
                
            @endif

             @if (session('error'))

            <div class="alert alert-danger"> {{ session('error') }}</div>
                
            @endif
            
        

                <form action="{{ route('jos.store') }}" method="POST">
                @csrf
                    
                    <!-- Contractor -->
                    <div class="form-group mb-3">
                        <label for="contractor_id">Contractor</label>
                        <select class="form-control" name="contractor_id" required>
                            <option value="">-- Select Contractor --</option>

                            
                            @if (!empty($contractors))
                            
                            @foreach ($contractors as $contractor)
                                <option 
                                
                                
                                @if (request('contractor_id') == $contractor->id)
                                selected
                                    
                                @endif
                                
                                value="{{ $contractor->id }}">{{ $contractor->name }} ({{ $contractor->code }})</option>
                            @endforeach
                                
                            @endif
                            
                            


                        </select>
                    </div>


                     <!-- Conductor -->
        <div class="form-group mb-3">
            <label for="conductor_id">Conductor</label>
            <select class="form-control" name="conductor_id" required>
                <option value="">-- Select Conductor --</option>
                @foreach ($conductors as $conductor)
                    <option 
                     @if (request('conductor_id') == $conductor->id)
                                selected
                                    
                                @endif
                    
                    value="{{ $conductor->id }}">{{ $conductor->first_name }} {{ $conductor->middle_name }} {{ $conductor->last_name }} ({{ $conductor->staff_id }})</option>
                @endforeach
            </select>
        </div>

        <!-- Month -->
        <div class="form-group mb-3">
            <label for="month">JOS Month</label>
            <input type="month" name="month" class="form-control" value="{{ request('month') }}" required>
        </div>

        <!-- Paid Amount -->
        <div class="form-group mb-3">
            <label for="paid_amount">Paid Amount</label>
            <input type="number" step="0.01" name="paid_amount" class="form-control">
        </div>

        <!-- Balance Amount -->
        <div class="form-group mb-3">
            <label for="paid_amount">Balance Amount</label>
            <input type="number" step="0.01" name="balance_amount" class="form-control">
        </div>



                   

                     
                    
                    <button type="submit" class="btn btn-dark">Generate JOS</button>
                    </form>
            
            
            </div>
    
    </div>

    </div>
     
   
@endsection
   