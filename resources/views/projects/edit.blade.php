@extends('layouts.layout')
@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Editar Proyecto</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nombre del Proyecto:</label>
            <input type="text" name="name" id="name" value="{{ $project->name }}" 
                   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                   required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Descripción:</label>
            <textarea name="description" id="description" rows="4" 
                      class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                      required>{{ $project->description }}</textarea>
        </div>
        <button type="submit" 
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
            Actualizar Proyecto
        </button>
    </form>
</div>
@endsection