@extends('layout')

@section('title', $project->title)

@section('content')
    <h1>{{$project->title}}</h1>
    @auth
        <a href={{route('proyectos.edit', $project)}}>Editar</a>
        <form method="POST" action="{{route('proyectos.destroy', $project)}}"">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    @endauth
    <ul>
        <p>{{$project->description}}</p>
        <p>{{$project->created_at->diffForHumans()}}</p> 
    </ul>  
@endsection