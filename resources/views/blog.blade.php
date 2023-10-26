{{-- //ruta específica en base -> resource/views --}}
@extends('layouts.start')

{{-- HEAD --}}
@section('title', 'Blog')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/blog-post.css') }}">
@endsection

{{-- BODY --}}
@section('content')
    <h1>LISTADO</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vitae facilis iste aperiam culpa facere natus modi hic. Quos, assumenda?</p>
    <p><strong>Clickea sobre el enlace de cada opción de curso</strong></p>
    <ul class="ul_blog">
        @forelse($posts as $post)
            <li>
                {{-- /blog/{{{$post['slug']}}} --}}
                <strong>{{$post['id']}}</strong> - <a href="{{Route('post', $post['slug'])}}">{{$post['title']}}</a>
                <span class="mini-font up">({{$post->user->name}})</span>
            </li>

        @empty
            <li>La lista está vacía.</li>
        @endforelse
    </ul>
@endsection


