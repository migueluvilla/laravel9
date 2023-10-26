@include('layouts.navigation')
<div class="container px-8 mx-auto my-4">
    <div class="px-32 text-gray-900 dark:text-gray-100 flex justify-between mb-0 pb-0">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalle de posteo') }}
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
</div>
