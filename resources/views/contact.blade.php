@extends('layout')
@section('title', __('Contacto'))
@section('content')
    <h1>{{__('Contact')}}</h1>
    <form method="POST" action="{{route('message.store')}}">
        @csrf
        <input type="text" name="name" placeholder={{__('Name')}} value={{old('name')}} ><br>
        {!! $errors->first('name', '<small>:message</small><br>')!!}

        <input type="email" name="email" placeholder={{__('Email')}} value={{old('email')}}><br>
        {!! $errors->first('email', '<small>:message</small><br>')!!}

        <input type="text" name="subject" placeholder={{__('Subject')}} value={{old('subject')}}><br>
        {!! $errors->first('subject', '<small>:message</small><br>')!!}

        <textarea name="content" placeholder={{__('Message')}} value={{old('content')}}></textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>')!!}

        <button>Enviar</button><br>
    </form>
@endsection