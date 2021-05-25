@extends('crud.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-10 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
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
   
<form action="{{ route('crud.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>first_name:</strong>
                <input type="text" name="first_name" class="form-control" placeholder="first_name" value="{{old('first_name')}}" >
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>last_name:</strong>
                <input type="text" name="last_name" class="form-control" placeholder="last_name" value="{{old('last_name')}}"> 
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>dob:</strong>
                <input type="date" name="dob" class="form-control" placeholder="dob" value="{{old('dob')}}">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
            <label for="class">Choose class:</label>
                <select name="class" id="class">
                    <option value="class1">Class 1</option>
                    <option value="class2">Class 2</option>
                </select>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea  name="address" class="form-control" style="height:150px"  placeholder="address" value="{{old('address')}}"></textarea>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
            <label for="country">Choose country:</label>
                <select name="country" id="country">

                    <option value="country1">country 1</option>
                    <option value="country2">country 2</option>
                </select>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
            <label for="city">Choose City:</label>
                <select name="city" id="city">

                    <option value="city1">City 1</option>
                    <option value="city2">City 2</option>
                </select>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
            <label for="state">Choose state:</label>
                <select name="state" id="state">

                    <option value="state1">State 1</option>
                    <option value="state2">State 2</option>
                </select>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <label for="status">status</label>
                <input type="checkbox" id="status" name="status" >
            </div>
        </div>
        
        <div class="col-xs-10 col-sm-10 col-md-10 text-center">
                <button id="xx" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection