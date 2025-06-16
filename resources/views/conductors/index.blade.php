
@extends('layouts.app')

@section('content')
    
     <div class="row">

    <div class="col-md-12">
            <div class="d-flex justify-content-between">
            <h4>Create</h4>
            <a  href="{{ route('listing-conductors') }}" class="btn btn-dark text-white">List</a>
            </div>

            <div class="col-md-12">
        

                <form>
                @csrf
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="First Name">
                        
                    </div>
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" id="code" placeholder="Middle Name">
                    </div>

                     <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="code" placeholder="Last Name">
                    </div>

                    <div class="form-group">
                        <label>Staff ID</label>
                        <input type="text" class="form-control" id="code" placeholder="Staff ID">
                    </div>



                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="rate" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" id="code" placeholder="Phone Number">
                    </div>

                    <div class="form-group">
                        <label>Department Name</label>
                        <input type="text" class="form-control" id="code" placeholder="Department Name">
                    </div>

                   

                     
                    
                    <button type="submit" class="btn btn-dark">Save</button>
                    </form>
            
            
            </div>
    
    </div>

    </div>
     
   
@endsection
   