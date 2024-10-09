<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary w-100" style="position: fixed;z-index:9999">
        <div class="container container-fluid  py-1">
            <a href="/">
                <img class="logo-navbar me-2" src="{{ asset('image/' . $data->image) }}" alt="">
            </a>
            <div class="d-flex ">

                <div class="d-block d-lg-none">

                    @if (session('lang') == 'en')
                        <button class="btn">
                            <img wire:click="toId" style="height: 30px" class="img-fluid "
                                src="{{ asset('image/uk flag.png') }}" alt="">
                        </button>
                    @elseif (session('lang') == 'id')
                        <button class="btn">
                            <img wire:click="toEn" style="height: 30px" class="img-fluid "
                                src="{{ asset('image/indo flag.png') }}" alt="">
                        </button>
                    @endif
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        @if (request()->routeIs('index'))
                            <a class="nav-link text-center text-lg-start active text-header" aria-current="page"
                                href="#home">Home</a>
                        @else
                            <a class="nav-link text-center text-lg-start  text-header" aria-current="page"
                                href="/">Home</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start {{ request()->is('#about') ? 'active' : '' }} text-header"
                            aria-current="page" href="{{ route('index') }}#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start  text-header" aria-current="page"
                            href="{{ route('index') }}#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start  text-header" aria-current="page"
                            href="{{ route('index') }}#faq">Help
                            Center</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start  text-header" aria-current="page"
                            href="{{ route('index') }}#contact">Contact
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start {{ request()->routeIs('news') ? 'active' : '' }} text-header"
                            aria-current="page" href="{{ route('news') }}">News</a>
                    </li>


                </ul>

                <div class="d-flex justify-content-center align-items-center ">
                    <div class="d-none d-lg-block">

                        @if (session('lang') == 'en')
                            <button class="btn">
                                <img wire:click="toId" style="height: 30px" class="img-fluid "
                                    src="{{ asset('image/uk flag.png') }}" alt="">
                            </button>
                        @elseif (session('lang') == 'id')
                            <button class="btn">
                                <img wire:click="toEn" style="height: 30px" class="img-fluid "
                                    src="{{ asset('image/indo flag.png') }}" alt="">
                            </button>
                        @endif
                    </div>

                    <div class="mb-1 mb-lg-0">

                        @if (isset($_COOKIE['token']) && !empty($_COOKIE['token']))
                            <a href="{{ route('admin.dashboard') }}">
                                <button class="btn btn-secondary" type="button">Dashboard</button>
                            </a>
                        @else
                            <a href="{{ route('login') }}">

                                <button class="btn btn-secondary" type="button">Login</button>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
