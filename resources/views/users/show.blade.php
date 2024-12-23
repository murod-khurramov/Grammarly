@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }} profili</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Ro'yxatdan o'tgan sana: {{ $user->created_at->format('d-m-Y') }}</p>
@endsection
