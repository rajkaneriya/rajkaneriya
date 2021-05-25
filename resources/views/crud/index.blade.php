@extends('crud.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>LARAVEL CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('crud.create') }}"> Create New User</a><br><br><br>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>DOB</th>
            <th>Class</th>
            <th>Address</th>
            <th>Country</th>
            <th>State</th>
            <th>City</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($crud as $user)

      

        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->dob }}</td>
            <td>{{ $user->class }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->country }}</td>
            <td>{{ $user->state }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->status }}</td>
            <td>
            

            
                   
            
          

                    <a class="btn btn-info" href="{{ route('crud.show',$user->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route( 'crud.edit', $user->id) }}">Edit</a>



           

                    <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="crud/delete/{{$user->id}}">Delete</a>

          
                  
                   
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $crud->links() !!}
      
@endsection