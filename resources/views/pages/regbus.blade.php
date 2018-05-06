@extends('layouts.appp')

 @section('content')
  <h3>Bus Registration Page</h3>
  <div class="col-md-8">
   {!! Form::open(['url' => 'foo/bar']) !!}
    <div class="form-group">
    	{{form::label('plateNo', 'Plate Number')}}
    	{{form::text('plateNo', '', ['class' => 'form-control', 'placeholder' => 'plate number'])}}
    </div>
    <div class="form-group">
    	{{form::label('busowner', 'Bus Owner')}}
    	{{Form::select('size', ['L' => 'dav', 'S' => 'tino'], null, ['placeholder' => 'choose bus owner'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
  </div>
 @endsection