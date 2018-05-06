@extends('layouts.appp')

 @section('content')
  <h3>User Registration Page</h3>
  <div class="col-md-8">
  {!! Form::open(['url' => 'foo/bar']) !!}
    <div class="form-group">
    	{{form::label('name', 'Name')}}
    	{{form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    <div class="form-group">
    	{{form::label('surname', 'Surname')}}
    	{{form::text('surname', '', ['class' => 'form-control', 'placeholder' => 'surname'])}}
    </div>
    <div class="form-group">
    	{{form::label('amount', 'Amount')}}
    	{{form::text('amount', '', ['class' => 'form-control', 'placeholder' => 'amount'])}}
    </div>
    <div class="form-group">
    	{{form::label('category', 'Category')}} &nbsp;
    	{{Form::select('category', ['s' => 'Student', 'n' => 'Normal'], 'S')}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
  </div>
 @endsection