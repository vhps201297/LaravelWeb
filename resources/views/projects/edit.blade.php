@extends('layout')

@section('title', $project->title)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                @include('partials.validation_errors')
        
                <form class="bg-white rounded py-3 px-4 shadow"
                method="POST" action={{route('proyectos.update', $project)}}>
                    @method('PATCH')
                    <h1 class="display-4">Editar proyecto</h1>
                    <hr>
                    @include('projects._form', ['button_text' => 'Actualizar'])
                </form>
            </div>            
        </div>
    </div>
    
@endsection