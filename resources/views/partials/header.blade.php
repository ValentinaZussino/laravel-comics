<header>
    <div class="container container-header">
        <a href="#" id="top-logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC logo">
        </a>
        <nav>
            <ul>
                <li>
                    <a class=" {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">Characters</a>
                </li>
                <li>
                    <a class=" {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a class=" {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">Movies</a>
                </li>
                <li>
                    <a class=" {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">TV</a>
                </li>
                <li>
                    <a class=" {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">Games</a>
                </li>
                <li>
                    <a class=" {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">Collectibles</a>
                </li>
                <li>
                    <a class=" {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">Videos</a>
                </li>
                <li>
                    <a class=" {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">Files</a>
                </li>
                <li>
                    <a class=" {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">News</a>
                </li>
                <li>
                    <a class=" {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">Shop</a>
                </li>
            </ul>
        </nav>
    </div>
</header>