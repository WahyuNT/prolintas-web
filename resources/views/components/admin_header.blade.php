<!--  Header Start -->
<header class="app-header shadow-sm bg-primary  d-lg-block d-none">
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" data-bs-toggle="modal" data-bs-target="#modalSidebar">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>

        </ul>

        <div class="navbar-collapse justify-content-end px-0 container" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                <a href="{{ route('admin.user') }}">

                    <button type="submit" class="btn btn-primary me-2"><i
                            class="fa-solid fa-user text-white"></i></button>
                </a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Log out</button>
                </form>

            </ul>
        </div>



    </nav>
</header>
<!--  Header End -->


<div class="d-block d-lg-none">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary w-100" style="position: fixed;z-index:999999">
        <div class="container py-1">
            @php
                use App\Models\Landing;
                $data = Landing::where('type', 'header')->first();
            @endphp
            <a href="/">
                <img class="logo-navbar me-2" src="{{ asset('image/' . $data->image) }}" alt="">
            </a>
            <div class="d-flex ">
                <a href="{{ route('admin.user') }}">

                    <button type="submit" class="btn btn-primary me-2"><i
                            class="fa-solid fa-user text-white"></i></button>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start {{ request()->routeIs('admin.dashboard') ? 'active' : '' }} text-header-admin"
                            aria-current="page" href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start {{ request()->routeIs('admin.services') ? 'active' : '' }} text-header-admin"
                            aria-current="page" href="{{ route('admin.services') }}">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start {{ request()->routeIs('admin.news') ? 'active' : '' }} text-header-admin"
                            aria-current="page" href="{{ route('admin.news') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start {{ request()->routeIs('admin.faq') ? 'active' : '' }} text-header-admin"
                            aria-current="page" href="{{ route('admin.faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start {{ request()->routeIs('admin.contact') ? 'active' : '' }} text-header-admin"
                            aria-current="page" href="{{ route('admin.contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start {{ request()->routeIs('admin.messages') ? 'active' : '' }} text-header-admin"
                            aria-current="page" href="{{ route('admin.messages') }}">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center text-lg-start {{ request()->routeIs('admin.account') ? 'active' : '' }} text-header-admin"
                            aria-current="page" href="{{ route('admin.account') }}">Account</a>
                    </li>


                </ul>

                <div class="mb-1 mb-lg-0 d-flex justify-content-center gap-3">
                    <div class="div">

                        <a href="/" class="btn btn-secondary">Homepage</a>
                    </div>
                    <div class="div">
                     
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Log out</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </nav>
</div>
