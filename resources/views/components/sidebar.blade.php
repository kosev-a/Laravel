<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('index')) active @endif" aria-current="page" href="{{ route('welcome') }}">
                    <span data-feather="home"></span>
                    Главная
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('categories.*')) active @endif" href="{{ route('categories') }}">
                    <span data-feather="file"></span>
                    Категории
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('news.*')) active @endif" href="{{ route('news') }}">
                    <span data-feather="list"></span>
                    Новости
                </a>
            </li>
        </ul>
    </div>
</nav>
