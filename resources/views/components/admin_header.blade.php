<!--  Header Start -->
<header class="app-header shadow-sm">
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
