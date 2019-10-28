@extends('layouts.master')
@section('content')
      <!-- if there are creation errors, they will show here -->
     {{ Html::ul($errors->all()) }} <!-- changed HTML to html -->

     {{ Form::open(array('url' => 'contact.store')) }}
         
     <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name','Your name', array('class' => 'form-control')) }}
          
            </div>
  <div class="form-group"> 
            {{ Form::label('email', 'Email') }}     
            {{  Form::text('email', 'example@gmail.com',array('class' => 'form-control')) }}
           
            </div>
  <div class="form-group"> 
            {{ Form::label('msg', 'Message') }}
            {{  Form::textarea('msg', 'Some message',array('class' => 'form-control')) }}
           
                       
            
            </div>
  <div class="form-group">       
            {{ Form::submit('Submit!',array('class' => 'btn btn-primary')) }}
             {{ Form::close() }}
      </div>
   
      @endsection