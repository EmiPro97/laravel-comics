<header>
    <div class="container flex align-center">
        <a href="comics">
            <img src="{{ asset('images/dc-logo.png') }}" alt="logo-dc">
        </a>
        <nav class="main-nav flex align-center">
            <ul class="flex align-center list-style-none">
                <li class="active"><a href="{{ route('comics') }}">comics</a></li>
                <li><a href="{{ route('news') }}">news</a></li>
            </ul>
        </nav>
    </div>
</header>