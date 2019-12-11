@extends('layouts.app')

@section('content')
<div class="container">
<h1>Welcome To Freebook</h1>
<a href="/profile/{{$user->id}}/edit">Edit Profile</a>
<h1>{{$user->name}}</h1>
  </div>  
@endsection
