<!-- app/views/nerds/create.blade.php -->


@extends('layouts.usermaster')

@section('content')


<h1>Create an User</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }} <!-- changed HTML to html -->

{{ Form::open(array('url' => 'users')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Request::old('name'), array('class' => 'form-control')) }}
        <!-- For laravel > 5.2 change Input to Request -->
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Request::old('email'), array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('plan', 'plan') }}
        {{ Form::text('plan', Request::old('plan'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', Request::old('password'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('start_date', 'start_date') }}
        {{ Form::date('start_date', Request::old('start-date'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">   
    {{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>
@endsection