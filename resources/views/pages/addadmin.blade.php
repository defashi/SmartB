@extends('layouts.appp')

 @section('content')
  <h3>Admin Registration Page</h3>
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
        {{form::label('email', 'Email')}}
        {{form::email('email', '', ['class' => 'form-control', 'placeholder' => 'email'])}}
    </div>
    <div class="form-group">
    	{{form::label('password', 'Password')}}
    	{{Form::password('password', ['class' => 'awesome'])}}
    </div>
    <div class="form-group">
        {{form::label('password', 'Confirm Password')}}
        {{Form::password('password', ['class' => 'awesome'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
 @endsection