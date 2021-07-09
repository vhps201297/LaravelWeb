@extends('layout')

@section('title', __('Proyecto Nuevo'))

@section('content')
    <h1>Creación de un nuevo proyecto</h1>

    @include('partials.validation_errors')
    
    <form method="POST" action={{route('proyectos.store')}}>
        @include('projects._form', ['button_text' => 'Guardar'])
    </form>
@endsection