
@extends('layouts.app')

@section('content')
    
     <div class="row">

    <div class="col-md-12">
            <div class="d-flex justify-content-between">
            <h4>Edit</h4>
            <a  href="{{ route('listing-type-of-work') }}" class="btn btn-dark text-white">List</a>
            </div>

            <div class="col-md-12">
         @if (session('success'))

            <div class="alert alert-success"> {{ session('success') }}</div>
                
            @endif

                <form action="{{ route('update-type-of-work') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $result->id }}">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value={{ $result->name }} placeholder="Enter Name">
                        @error('name')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                            
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Rate</label>
                        <input type="text" class="form-control" name="rate" value="{{ $result->rate }}" placeholder="i.e 10.00">
                         @error('rate')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                            
                        @enderror
                    </div>

                     <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" value="{{ $result->code }}" placeholder="i.e PNT0001">
                         @error('code')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                            
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Update</button>
                    </form>
            
            
            </div>
    
    </div>

    </div>
     
   
@endsection
   