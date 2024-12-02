@extends('layout')

@section('title', 'Home')

@section('content')
<div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white shadow-lg rounded-lg p-8 text-center">
    <h1 class="text-4xl font-extrabold mb-6">Welcome to School Platform</h1>
    <p class="mb-6 text-lg font-medium">
        Your ultimate tool to manage and track projects efficiently. Organize, collaborate, and achieve success together!
    </p>
    
    <div class="flex justify-center space-x-4">
        <a href="{{ route('projects.index') }}" 
           class="bg-white text-blue-600 px-6 py-3 rounded-lg shadow-md font-semibold hover:bg-gray-100 transition">
            View Projects
        </a>
        <a href="{{ route('projects.create') }}" 
           class="bg-indigo-700 px-6 py-3 rounded-lg shadow-md font-semibold hover:bg-indigo-800 transition">
            Create New Project
        </a>
    </div>
</div>
@endsection
