{{-- @extends('template') --}}

{{-- @section('title')
    Diseño Web Laravel
@endsection --}}

{{-- @section('header-dash') --}}
<x-app-layout class="my-0 mx-0 px-0 py-0">
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <x-slot name="header" class="mb-0 pb-0">
        <div class="p-0 text-gray-900 dark:text-gray-100 flex justify-between mb-0 pb-0">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Acceso al Sistema') }}
            </h2>
            <a href="{{ route('posts.index') }}"
                class="hover:bg-white"
                style=" padding: 10px 20px;
                    background-color: #3a9ef6;
                    color: #fff;
                    border-radius: 15px;">
                    POSTEOS
            </a>
        </div>
    </x-slot>

{{-- @endsection
@section('content') --}}
    @section('header-dash')
    <header class="flex justify-between items-center py-4">
        <div class="flex items-center flex-grow gap-4">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/elefante.png') }}" class="h-12" />
            </a>
            <form action="{{ route('dashboard') }}" method="GET" class="flex-grow">
                <input type="text" placeholder="Buscar" name="search" value="{{ request('search') }}"
                class="border border-gray-200 rounded py-2 px-4 w-1/2">
            </form>
        </div>

        @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </header>

    <div class="opacity-60 h-px mb-8" style="background: linear-gradient(to right,
            rgba(200, 200, 200, 0) 0%,
            rgba(200, 200, 200, 1) 30%,
            rgba(200, 200, 200, 1) 70%,
            rgba(200, 200, 200, 0) 100%"></div>
    @endsection
    <div class="container px-4 mx-auto my-4">
        @yield('header-dash')


        <div class="bg-gray-900 px-20 py-16 rounded-lg mb-4 relative overflow-hidden mt-0">
            {{-- destacado  --}}
            <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Programación</span>
            <h1 class="text-3xl text-white mt-4">BLOG</h1>
            <p class="text-sm text-gray-400 mt-2">Proyecto de desarrollo web para profesionales</p>

            <img src="{{ asset('images/dev.png') }}" class="absolute -right-20 -bottom-20 opacity-20">
        </div>

        <div class="px-4">
            <h1 class="text-2xl mb-8 text-gray-900">Contenido técnico</h1>

            <div class="grid grid-cols-1 gap-4 mb-4  bg-gray-100">
                @foreach($posts as $post)
                <a href="{{ route('posteos', $post->slug) }}" class=" bg-white rounded-lg px-6 py-4">
                    <p class="text-xs flex items-center gap-2">
                        <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                        <span>{{ $post->created_at->format('d/m/Y') }}</span>
                    </p>
                    <h2 class="text-lg text-gray-900 mt-2">{{ $post->title }}</h2>
                    <div class="text-xs text-gray-900 opacity-75 flex items-center gap-1 my-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                        </svg>
                        {{ $post->user->name }}
                    </div>
                </a>
                @endforeach
            </div>
            {{ $posts->links() }}
        </div>
    {{-- @endsection--}}
    </div>

</x-app-layout>
