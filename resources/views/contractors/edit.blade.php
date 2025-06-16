
@extends('layouts.app')

@section('content')
    
     <div class="row">

    <div class="col-md-12">
            <div class="d-flex justify-content-between">
            <h4>Edit</h4>
            <a  href="{{ route('listing-contractors') }}" class="btn btn-dark text-white">List</a>
            </div>

            <div class="col-md-12">
        

                 <form>
                @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" value="{{ $result->name }}" aria-describedby="emailHelp" placeholder="Enter Name">
                        
                    </div>
                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" id="code"value="{{ $result->code }}" placeholder="i.e CNT0001">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="rate" value="{{ $result->email }}" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" id="code" value="{{ $result->phone_number }}" placeholder="Phone Number">
                    </div>

                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control" id="code" value="{{ $result->company_name }}" placeholder="Company Name">
                    </div>

                    <div class="form-group">
                        <label>Balance</label>
                        <input type="text" class="form-control" id="code" value="{{ $result->balance }}" placeholder="i.e 2000.00">
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Update</button>
                    </form>
            
            
            </div>
    
    </div>

    </div>
     
   
@endsection
   