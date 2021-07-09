@extends('layout')

@section('title', __('Proyectos'))

@section('content')
    <h1>Proyectos</h1>

    <a href={{route('proyectos.create')}}>Crear nuevo proyecto</a>
    <ul>
        @forelse ($projects as $project)
            <li><a href={{route('proyectos.show', $project)}}>{{$project->title}}</a></li>
            <small>{{$project->description}}</small>
        @empty
            <li>No hay elementos que mostrar.</li>
        @endforelse

    </ul>  
@endsection