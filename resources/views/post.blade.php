{{-- //ruta específica en base -> resource/views --}}
@extends('layouts.start')

{{-- HEAD --}}
@section('title', 'Post')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/blog-post.css') }}">
@endsection

{{-- BODY --}}
@section('content')
    <h1>DETALLE!</h1>
    <p>Entradas o posteos de los diferentes cursos.</p>
    <br>
    <h2>Usuario: <span>{{$post->user->name}}</span></h2>

    <h3>Posteo sobre el curso n° <span>({{$post->id}})</span> de <span>{{$post->title}} </span></h3>
    <br>

    <p><strong>Mensaje: </strong>{{$post->body}}</p>
    <br>

    <p><span class="mini-font">Entrada creada el <span class="font-date">{{$post->created_at->format('d-m-Y')}}</span> a las <span class="font-date">{{$post->created_at->format('H:m:s')}} hs.</span> y modificada el <span class="font-date">{{$post->updated_at->format('d-m-Y')}}</span> a las <span class="font-date">{{$post->updated_at->format('H:m:s')}} hs.</span>. </span>  </p>
    <a class="link" href="{{Route('blog')}}">VOLVER</a>

@endsection



