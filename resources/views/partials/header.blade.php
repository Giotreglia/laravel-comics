<header>
    <div id="header-container" class="container container-xl">
        <div id="logo-container">
            <a href="{{route('home')}}"><img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="logo Dc"></a>
        </div>

        <nav>
            <ul id="nav-list" class="m-0 ">
                @foreach ($navLinks as $link)
                <li class="nav-item"><a href="{{$link['href']}}">{{$link['text']}}</a></li>
                @endforeach
            </ul>
        </nav>

    </div>
</header>