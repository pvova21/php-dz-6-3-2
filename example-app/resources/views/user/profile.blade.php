@extends('layouts.app')

@section('content')
    <div>
        <h1>User Profile</h1>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>ID: {{ $user->id }}</p>
    </div>
@endsection