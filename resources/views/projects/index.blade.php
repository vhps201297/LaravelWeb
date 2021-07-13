@extends('layout')

@section('title', __('Proyectos'))

@section('content')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4">Proyectos</h1>
            @auth
                <a class="btn btn-primary active" href={{route('proyectos.create')}}>Crear nuevo proyecto</a>
            @endauth
        </div>
        <p class="lead text-secondary">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, officiis magni recusandae error et facilis ratione distinctio architecto quo delectus.</p>
        
        <ul class="list-group">
            @forelse ($projects as $project)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="text-secondary d-flex justify-content-between align-items-center" href={{route('proyectos.show', $project)}}>
                        <span class="font-weight-bold ">{{$project->title}}</span> 
                        <span class="text-black-50">{{$project->created_at->format('d-m-y')}}</span>
                    </a>
                    
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay elementos que mostrar.</li>
            @endforelse
    
        </ul>  
    </div>
    
@endsection