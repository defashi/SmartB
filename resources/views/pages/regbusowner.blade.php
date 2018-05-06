@extends('layouts.appp')

 @section('content')
  <h3>Bus Owner Registration Page</h3>
  <div class="col-md-8">
   {!! Form::open(['url' => 'foo/bar']) !!}
   <div class="form-group">
    	{{form::label('name', 'Name')}}
    	{{form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
  </div>
 @endsection