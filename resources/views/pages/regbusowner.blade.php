@extends('layouts.appp')

 @section('content')
  <h3>Bus Owner Registration Page</h3>
  <div class="col-md-8">
   {!! Form::open(['url' => 'foo/bar']) !!}
   <div class="form-group">
    	{{form::label('name', 'Name')}}
    	{{form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>

     <div class="form-group">
      {{form::label('phone', 'Phone number')}}
      {{form::text('phone', null, ['class' => 'form-control', 'placeholder' => '+255*** number'])}}
    </div>

     <div class="form-group">
      {{form::label('email', 'Email')}}
      {{form::text('name', '', ['class' => 'form-control', 'placeholder' => ' name@gmail.com'])}}
    </div>

     <div class="form-group">
      {{form::label('adress', 'Permanent Adress')}}
      {{form::text('adress', null, ['class' => 'form-control', 'placeholder' => 'e.g. Sinza'])}}
    </div>
    
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
  </div>
 @endsection