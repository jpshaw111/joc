@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-md-12">

 <div class="d-flex justify-content-between">
            <h4>All generated JOS</h4>
            <a  href="{{ route('create-job-order-statements') }}" class="btn btn-dark text-white">Generate JOS</a>
            </div>

            
            @if (session('success'))

            <div class="alert alert-success"> {{ session('success') }}</div>
              
            @endif
            


<table class="table table-bordered mt-4">
  <thead class="thead-dark">
    <tr>
     
      <th scope="col">Ref</th>
      <th scope="col">Total Job Orders</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Paid Amount</th>
      <th scope="col">Balance</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  
  @if (!empty($statements))

  
  @foreach ($statements as $row)
    <tr>
      <th scope="row">{{ $row->reference_number  }}</th>
      <td>{{ $row->total_job_orders }}</td>
      <td>{{ $row->total_amount }}</td>
      <td>
      <!-- Inline Edit -->
            <form action="{{ route('jos.update', $row->id) }}" method="POST" class="d-flex gap-2 align-items-center">
                @csrf @method('PUT')
                
                <input type="number" step="0.01" name="paid_amount" class="form-control form-control-sm" value="" style="width:120px;" placeholder="{{ $row->paid_amount }}">
                  <button class="btn btn-sm btn-primary">Save</button>
            </form>
      </td>
      <td>{{ $row->balance_amount }}</td>
      <td>
      <a href="{{ route('view-job-orders-by-jos', $row) }}" class="text-black mr-3">
            View Job Orders 
      </a>

      <a href="#" onclick="return confirm('Are you want to delete this?')" class="text-black">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
            </svg>
      </a>
      </td>
    </tr>
    
  @endforeach
  
    
  @endif
  
  </tbody>
</table>

</div>

</div>

@endsection