
{{-- //ruta específica en base -> resource/views --}}
@extends('layouts.start')

{{-- HEAD --}}
@section('title', 'Home')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

{{-- BODY --}}
@section('content')

    <h1>HOME</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, est? Sequi excepturi laudantium magnam doloremque, perferendis sunt. Maxime quisquam eius quia minima id sed veritatis provident magnam facere nemo, impedit quaerat perspiciatis quos at porro possimus illum atque enim asperiores facilis? Quidem libero sapiente quae dolores id aperiam laborum sit, fugiat, minima suscipit, minus neque ipsa consectetur quas. Sit harum iusto exercitationem optio cupiditate officia explicabo, deleniti modi neque earum quidem perspiciatis quis vero facere illo porro ipsum voluptas dignissimos mollitia at beatae nam voluptatem dolore reiciendis? Nam earum praesentium, quas voluptates cumque est exercitationem animi ratione sequi alias inventore.</p>
    <br>
    <br>
    <a class='link' href="{{Route('blog')}}">ir a blog</a>
@endsection

