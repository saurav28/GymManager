<!-- app/views/nerds/edit.blade.php -->
@extends('layouts.usermaster')

@section('content')

<h1>Edit {{ $user->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}
    <!-- TODO create and edit has to be moved to a single partial file -->
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('plan', 'plan') }}
        {{ Form::text('plan', Request::old('plan'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('start_date', 'start_date') }}
        {{ Form::date('start_date', Request::old('start-date'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">   
    {{ Form::submit('Edit the User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@endsection
