
@extends('layouts.app')

@section('content')
    
     <div class="row">

    <div class="col-md-12">
            <div class="d-flex justify-content-between">
            <h4>Create</h4>
            <a  href="{{ route('listing-type-of-work') }}" class="btn btn-dark text-white">List</a>
            </div>

            <div class="col-md-12">
        

                <form>
                @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
                        
                    </div>
                    <div class="form-group">
                        <label>Rate</label>
                        <input type="text" class="form-control" id="rate" placeholder="i.e 10.00">
                    </div>

                     <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" id="code" placeholder="i.e PNT0001">
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Save</button>
                    </form>
            
            
            </div>
    
    </div>

    </div>
     
   
@endsection
   