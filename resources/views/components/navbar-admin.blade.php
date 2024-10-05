<nav class="navbar navbar-expand-lg  bg-white shadow-sm ">
    <div class="container py-1">
        <img class="logo-navbar me-2" src="{{ asset('image/logo prolintas.png') }}" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active text-header" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-header" aria-current="page" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-header" aria-current="page" href="#">Help Centre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-header" aria-current="page" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-header" aria-current="page" href="#">English</a>
                </li>

                {{-- <li class="nav-item dropdown text-header ">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        English
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Indonesia</a></li>
                    </ul>
                </li> --}}

            </ul>
            <a href="{{ 'login' }}">

                <button class="btn btn-secondary" type="button">Login</button>
            </a>
        </div>
    </div>
</nav>
