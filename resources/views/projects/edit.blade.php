@extends('layout')

@section('title', $project->title)

@section('content')
    <h1>Editar proyecto: {{$project->title}}</h1>

    @include('partials.validation_errors')

    <form method="POST" action={{route('proyectos.update', $project)}}>
        @method('PATCH')
        @include('projects._form', ['button_text' => 'Actualizar'])
    </form>
@endsection