<header>
    <ul class="nav justify-content-center  ">
        <li class="nav-item">
            <a class="nav-link active" href="{{ Route('home') }}" aria-current="page">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ Route('blog') }}">Blog</a>
        </li>

        @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('dashboard') }}">Dashboard</a>
            </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ Route('login') }}">Login</a>
        </li>
        @endauth
    </ul>

</header>
