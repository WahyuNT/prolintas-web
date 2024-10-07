<x-style />

<body style="background-color: #FBFBFB">

    @include('sweetalert::alert')
    <x-navbar />

    @yield('content')



    <x-script />
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />

    @php
        use App\Models\Landing;
        $data = Landing::where('type', 'floating-contact')->first();
    @endphp
    <a href="https://wa.me/{{ $data->description }}" target="_blank"
        class="float  text-decoration-none d-flex justify-content-center   align-items-center">
        <div class="m-0 p-0 my-float">
            {!! $data->icon !!}
        </div>
    </a>
</body>

</html>
