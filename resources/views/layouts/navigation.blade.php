<nav class="navbar navbar-expand-lg navbar-light nav-bg text-white p-3 " style="position: sticky; top: 0; z-index: 1000;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="#">
                <img src="" height="15"
                    alt="MDB Logo" loading="lazy" />
            </a>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="fs-5 text-white">
                            Movie of Cambodia
                        </span>
                    </a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <ul class="navbar-nav ms-auto">
                        
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle me-2" height="25"
                                    alt="Black and White Portrait of a Man" loading="lazy" />
                                    <span class="text-white">
                                        {{ Auth::user()->name }}
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST" class="d-block m-0">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Log Out</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link text-white">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link text-white">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
