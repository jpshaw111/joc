
@extends('layouts.app')

@section('content')
    
     <div class="row">

    <div class="col-md-12">
            <div class="d-flex justify-content-between">
            <h4>Create</h4>
            <a  href="{{ route('listing-type-of-work') }}" class="btn btn-dark text-white">List</a>
            </div>

            <div class="col-md-12 mt-3 mb-3">
            
            @if (session('success'))

            <div class="alert alert-success"> {{ session('success') }}</div>
                
            @endif
            
            
        

                <form action="{{ route('save-type-of-work') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Name" value="{{ old('name') }}">
                        @error('name')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                            
                        @enderror
                        
                    </div>
                    <div class="form-group">
                        <label>Rate</label>
                        <input type="text" class="form-control" name="rate" placeholder="i.e 10.00" value="{{ old('rate') }}">
                         @error('rate')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                            
                        @enderror
                    </div>

                     <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" placeholder="i.e PNT0001" value="{{ old('code') }}">
                         @error('code')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                            
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Save</button>
                    </form>
            
            
            </div>
    
    </div>

    </div>
     
   
@endsection
   