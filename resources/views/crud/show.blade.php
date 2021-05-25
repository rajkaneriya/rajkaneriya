@extends('crud.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1> Show Crud</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('crud.index') }}"> Back</a><br><br><br><br>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:: {{ $user->first_name }} </strong>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:: {{ $user->last_name }}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DOB:: {{ $user->dob }}</strong>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Class:: {{ $user->class }}</strong>
 
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:: {{ $user->address }}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Country:: {{ $user->country }}</strong>
 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>City:: {{ $user->city }}</strong>
 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>State:: {{ $user->state }}</strong>
 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

            <strong>Active: </strong>
                
                @if($user->status == 1)
                
                <strong>Active</strong>


                @else
                <strong>Deactive</strong>

                @endif
            </div>
        </div>
        
        
    </div>
@endsection