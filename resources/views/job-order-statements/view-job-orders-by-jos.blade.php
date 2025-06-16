@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-md-12">

 <div class="d-flex justify-content-between">
            <h4>Job Orders </h4>
            <a  href="{{ route('view-jos') }}" class="btn btn-dark text-white">Back</a>
            </div>


<table class="table table-bordered mt-4">
  <thead class="thead-dark">
    <tr>
     
      <th scope="col">Job No</th>
      <th scope="col">Work Type</th>
      <th scope="col">Actual Work</th>
      <th scope="col">Rate</th>
      
      
    </tr>
  </thead>
  <tbody>

  
  @if (!empty($result))

  
  @foreach ($result as $row)
    <tr>
      <th scope="row">{{ $row->reference_number }}</th>
      <td>{{ $row->name }}</td>
      <td>{{ $row->actual_work_completed }}</td>
      <td>{{ $row->rate }}</td>
      
     
    </tr>
    
  @endforeach
  
    
  @endif
  
  </tbody>
</table>

</div>

</div>

@endsection