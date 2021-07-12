@extends('layout')

@section('title', __('Proyectos'))

@section('content')
    <h1 class="display-4">Proyectos</h1>

    <a href={{route('proyectos.create')}}>Crear nuevo proyecto</a>
    <ul>
        @forelse ($projects as $project)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="d-flex justify-content-between align-items-center" href={{route('proyectos.show', $project)}}>
                    <span class="text-secondary font-weight-bold ">{{$project->title}}</span> 
                    <span class="text-black-50">{{$project->created_at->format('d-m-y')}}</span>
                </a>
                
            </li>
        @empty
            <li class="list-group-item border-0 mb-3 shadow-sm">No hay elementos que mostrar.</li>
        @endforelse

    </ul>  
@endsection