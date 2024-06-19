 @extends('layouts.app2') 
   
@section('content')

<style>

.table-responsive-stack tr {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}


.table-responsive-stack td,
.table-responsive-stack th {
   display:block;
/*      
   flex-grow | flex-shrink | flex-basis   */
   -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}

.table-responsive-stack .table-responsive-stack-thead {
   font-weight: bold;
}

@media screen and (max-width: 768px) {
   .table-responsive-stack tr {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
      border-bottom: 3px solid #ccc;
      display:block;
      
   }
   /*  IE9 FIX   */
   .table-responsive-stack td {
      float: left\9;
      width:100%;
   }
}



</style>
<div class="container">
<div class="card" style="width: 15rem;">
  <h2 class="card-header">Computing Device</h2>
</div>
</div>
<br>
<div class="container">        
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
  
        
            <a class="btn btn-success btn-sm" href="{{ route('Computing.create') }}"> <i class="fa fa-plus"></i> Add New Computing Device</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="30px">No.</th>
                    <th scope="col">Department ID</th>
                    <th>Ict Category ID:</th>
                    <th>Status ID:</th>
                    <th>IP Config ID:</th>
                    <th>End User:</th>
                    <th>Property No.:</th>
                    <th>Ict Code:</th>
                    <th>Brand:</th>
                    <th>Model:</th>
                    <th>Serial No.:</th>
                    <th>Address:</th>
                    <th>Floor:</th>
                    <th>Manufactured Date:</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            @forelse ($ict_devices as $ict_devices)
                <tr>
                    <td  data-label>{{ ++$i }}</td>
                    <td>{{ $ict_devices->department_id }}</td>
                    <td>{{ $ict_devices->ict_category_id }}</td>
                    <td>{{ $ict_devices->status_id }}</td>
                    <td>{{ $ict_devices->ip_config_id}}</td>
                    <td>{{ $ict_devices->end_user }}</td>
                    <td>{{ $ict_devices->property_no }}</td>
                    <td>{{ $ict_devices->ict_code }}</td>
                    <td>{{ $ict_devices->brand }}</td>
                    <td>{{ $ict_devices->model }}</td>
                    <td>{{ $ict_devices->serial_no }}</td>
                    <td>{{ $ict_devices->address }}</td>
                    <td>{{ $ict_devices->floor }}</td>
                    <td>{{ $ict_devices->manufactured_date }}</td>
                    <td>
                    <form action="{{ route('Ict.destroy',$ict_devices->id) }}" method="POST">
               
                            <a class="btn btn-info btn-sm" href="{{ route('Ict.show',$ict_devices->id) }}"><i class="fa fa-eye"></i> Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('Ict.edit',$ict_devices->id) }}"><i class="fa fa-edit"></i> Edit</a>
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
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
        
        {!! $ict_devices->links() !!}
  
  </div>
</div>  
@endsection