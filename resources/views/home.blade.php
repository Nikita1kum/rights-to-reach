{{-- @extends('layouts.app')

@section('content')
    <h1>Welcome to Rights to Reach</h1>
    <p>Know your rights and take action!</p>
    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
    <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
@endsection --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">
            Welcome to Rights to Reach
        </h2>
    </x-slot>

    <div class="p-6 text-gray-900">
        <p class="mb-4">Know your rights and take action!</p>

        <a href="{{ route('register') }}"
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
            Register
        </a>

        <a href="{{ route('login') }}"
           class="inline-block bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded mr-2">
            Login
        </a>

        <a href="{{ route('complaint.create') }}"
        class="inline-block bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded mr-2">
         Raise Issue
     </a>
    </div>
</x-app-layout>
