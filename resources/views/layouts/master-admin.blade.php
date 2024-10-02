<x-admin_style />

<body>
    @include('sweetalert::alert')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <x-admin_sidebar />

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <x-admin_header />

            <div class="container-fluid">
                @yield('content')


            </div>
        </div>
    </div>
    @livewireScripts
    <x-script />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
</body>

</html>
