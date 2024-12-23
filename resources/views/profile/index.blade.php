@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Profil</h1>

        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
            <p><strong>Ism:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Ro‘yxatdan o‘tgan sana:</strong> {{ $user->created_at->format('Y-m-d') }}</p>
        </div>
    </div>
@endsection
