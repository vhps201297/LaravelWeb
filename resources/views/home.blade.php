@extends('layout')

@section('title', __('Home'))

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-4">
                <h1 class="display-4 text-primary">Desarrollo de Software</h1>
                <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat odit, perferendis, perspiciatis reiciendis adipisci mollitia, assumenda quibusdam enim ipsam quas ratione velit aliquam quod nulla sapiente eveniet facilis alias!</p>
                <a class="btn btn-primary btn-block active" 
                href="{{route('contact')}}">Contáctame</a>
                <a class="btn btn-block btn-outline-primary" 
                href="{{'proyectos.index'}}">Mi portafolio</a>
            </div>

            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/home-2.svg" alt="Desarrollo de software">
            </div>
        </div>
    </div>
    
    
@endsection

