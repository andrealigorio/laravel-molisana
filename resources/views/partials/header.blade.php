<header>
    <div class="logo">
        <img src="{{asset('img/logo.png')}}" alt="Logo La Molisana">
    </div>
    <div class="menu">
        <nav>
            <ul>
                <li class="{{ Request::route()->getName() == 'home-page' ? 'active' : null }}">
                    <a href="{{route('home-page')}}">
                        Home
                    </a>
                </li>
                <li class="{{ Request::route()->getName() == 'products-page' ? 'active' : null }}">
                    <a href="{{route('products-page')}}">
                        I prodotti
                    </a>
                </li>
                <li class="{{ Request::route()->getName() == 'news-page' ? 'active' : null }}">
                    <a href="{{route('news-page')}}">
                        News
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>