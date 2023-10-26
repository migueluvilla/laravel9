{{-- //ruta específica en base -> resource/views --}}
{{-- @extends('layouts.start') --}}
@extends('template')

{{-- HEAD --}}
@section('title', 'Posteos')
@section('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/blog-post.css') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

{{-- BODY --}}
@include('layouts._partials.encabezado')

@section('content')

    <div class="max-w-3xl mx-auto">
        <h1 class="text-5xl mb-8"> {{ $post->title }} <span class="text-4xl text-red-700">({{$post->id}})</span></h1>
        <p class="my-4">
            <span class="text-xs">Entrada creada el
                <span class="text-indigo-700 font-bold">{{$post->created_at->format('d-m-Y')}}</span> a las
                <span class="text-indigo-700 font-bold">{{$post->created_at->format('H:m:s')}} hs.</span> y modificada el
                <span class="text-indigo-700 font-bold">{{$post->updated_at->format('d-m-Y')}}</span> a las
                <span class="text-indigo-700 font-bold">{{$post->updated_at->format('H:m:s')}} hs.</span> por el usuario
                <span class="text-red-700 font-bold"   >{{$post->user->name}}</span>.
            </span>
        </p>
        <p class="leading-loose text-lg text-gray-700">
            {{ $post->body }}
        </p>



        <p class="my-8 text-right">
            <a class="text-indigo-700 font-extrabold text-2xl my-4" href="{{Route('dashboard')}}">VOLVER</a>
        </p>
    </div>


@endsection



