@extends('crud.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-10 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('crud.index') }}"> Back</a><br><br>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
  
    <form action="{{ route('crud.update',$user->id) }}" method="POST">
    @csrf
        @method('PUT')
   
   
        <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>first_name:</strong>
                <input type="text" name="first_name" class="form-control" placeholder="first_name" value='{{ $user->first_name }}'>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>last_name:</strong>
                <input type="text" name="last_name" value='{{ $user->last_name }}' class="form-control" placeholder="last_name">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>dob:</strong>
                <input type="date" name="dob" value='{{ $user->dob }}' class="form-control" placeholder="dob">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
            <label for="class">Choose a class:</label>
                <select name="class" id="class">
                @if($user->class == 'class1')
                    <option value="class1" selected>class 1</option>
                    <option value="class2" >class 2</option>
                    @else
                    <option value="class1" >class 1</option>
                    <option value="class2" selected>class 2</option>
                    @endif
                   
                </select>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>address:</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="address">{{ $user->address }}</textarea>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
            <label for="country">Choose a country:</label>
                <select name="country" id="country">
                    @if($user->country == 'country1')
                    <option value="country1" selected>country 1</option>
                    <option value="country2" >country 2</option>
                    @else
                    <option value="country1" >country 1</option>
                    <option value="country2" selected>country 2</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
            <label for="city">Choose a City:</label>
                <select name="city" id="city">
                @if($user->class == 'class1')
                    <option value="city1" selected>City 1</option>
                    <option value="city2" >City 2</option>
                    @else
                    <option value="city1" >City 1</option>
                    <option value="city2" selected>City 2</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
            <label for="state">Choose a state:</label>
                <select name="state" id="state">
                @if($user->state == 'state1')
                    <option value="state1" selected>State 1</option>
                    <option value="state2">State 2</option>
                    @else
                    <option value="state1">State 1</option>
                    <option value="state2" selected>State 2</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <label for="status">status</label>
                @if($user->status == '1')
                <input type="checkbox" id="status" name="status" value="1" checked>
                @elseif($user->status != '1')

                <input type="checkbox" id="status" name="status" value="1">
                @endif
            </div>
        </div>
                        <input type="hidden" id="id" name="id" value="{{$user->id}}" >

        <div class="col-xs-10 col-sm-10 col-md-10 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
@endsection