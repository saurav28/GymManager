<!-- app/views/nerds/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
@include('partials.usersheaders')
<div class="container">
    @yield('content')
</div>

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

    {{ Form::submit('Edit the User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>