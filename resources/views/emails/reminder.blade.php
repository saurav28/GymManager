@component('mail::message')

Thank you for choosing GymManager!
<html>
<h6> Users Report </h6>
@foreach ($users as $user)
    <p> {{ $user->name }}</p>
@endforeach
<html>

Sincerely,  
GymManager admin team.
@endcomponent