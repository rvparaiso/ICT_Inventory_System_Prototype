@extends('layouts.app2')
   
@section('content')
<div class="container">
<div class="card mt-5">
  <h2 class="card-header">Department</h2>
</div>
</div>
<br>
<div class="container">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <br>
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
  
        <div class="p-2 bd-highlight"></div>
            <a class="btn btn-success btn-sm" href="{{ route('HDepartment.create') }}"> <i class="fa fa-plus"></i> Add New Department</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Name</th>
                    <th>Floor</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            @forelse ($h_department as $h_department)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $h_department->name }}</td>
                    <td>{{ $h_department->floor }}</td>
                    <td>
                        <form action="{{ route('HDepartment.destroy',$h_department->id) }}" method="POST">
             
                            <a class="btn btn-info btn-sm" href="{{ route('HDepartment.show',$h_department->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('HDepartment.edit',$h_department->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            @endforelse
            </tbody>
  
        </table>
        
        {!! $h_department->links() !!}
  
  </div>
  </div>  
 

@endsection