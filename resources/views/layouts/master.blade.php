<x-style />

<body style="background-color: #FBFBFB">
    @include('sweetalert::alert')
    <x-navbar />

    @yield('content')



    <x-script />
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>

</html>
