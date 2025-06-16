
@extends('layouts.app')

@section('content')
    
     <div class="row">

    <div class="col-md-12">
            <div class="d-flex justify-content-between">
            <h4>Edit</h4>
            <a  href="{{ route('listing-job-orders') }}" class="btn btn-dark text-white">List</a>
            </div>

            <div class="col-md-12">
        

                 <form>
                @csrf
                     <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" value="{{ $result->name }}" aria-describedby="emailHelp" placeholder="Enter Name">
                        
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" id="code" value="{{ $result->date }}" placeholder="Middle Name">
                    </div>

                     <div class="form-group">
                        <label>JOS Date</label>
                        <input type="date" class="form-control" name="jos_date" value="{{ $result->jos_date }}" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Type of work</label>
                        <select class="form-control" name="type_of_work_id" required>
                            <option value="">-- Select --</option>

                            
                            @if (!empty($typeOfWorks))
                            
                            @foreach ($typeOfWorks as $typeOfWork)
                                <option 
                                
                              
                              @if ($result->type_of_work_id == $typeOfWork->id)
                              selected
                                
                              @endif
                              
                                
                                value="{{ $typeOfWork->id }}">{{ $typeOfWork->name }} ({{ $typeOfWork->code }})</option>
                            @endforeach
                                
                            @endif
                            
                            


                        </select>
                    </div>


                     <!-- Contractor -->
                    <div class="form-group mb-3">
                        <label for="contractor_id">Contractor</label>
                        <select class="form-control" name="contractor_id" required>
                            <option value="">-- Select Contractor --</option>

                            
                            @if (!empty($contractors))
                            
                            @foreach ($contractors as $contractor)
                                <option 
                                 @if ($result->contractor_id == $contractor->id)
                              selected
                                
                              @endif
                                
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
                     @if ($result->conductor_id == $conductor->id)
                                selected
                                    
                                @endif
                    
                    value="{{ $conductor->id }}">{{ $conductor->first_name }} {{ $conductor->middle_name }} {{ $conductor->last_name }} ({{ $conductor->staff_id }})</option>
                @endforeach
            </select>
        </div>




                    <div class="form-group">
                        <label>Actual work completed</label>
                        <input type="text" class="form-control" id="actual_work_completed" value="{{ $result->actual_work_completed }}" placeholder="Actual work completed">
                    </div>

                    <div class="form-group">
                        <label>Remarks</label>
                        <input type="text" class="form-control" id="remarks" value="{{ $result->remarks }}" placeholder="Remarks">
                    </div>

                    <div class="form-group">
                        <label>Reference number </label>
                        <input type="text" class="form-control" id="reference_number" value="{{ $result->reference_number  }}" placeholder="i.e. JOB0001">
                    </div>

                   
                    
                    <button type="submit" class="btn btn-dark">Update</button>
                    </form>
            
            
            </div>
    
    </div>

    </div>
     
   
@endsection
   