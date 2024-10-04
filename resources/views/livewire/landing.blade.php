<div>
    <section id="home" class="bg-section pt-5 " style="background-image: url('{{ asset('image/' . $home->image) }}')">
        <div class="container h-100 ">
            <div class="d-flex align-items-center justify-content-between h-75">
                <div class="col-6 d-flex  flex-column">

                    @if (session('lang') == 'en')
                        <h1 class="text-white fw-bold">{{ $home->title }}</h1>
                    @elseif (session('lang') == 'id')
                        @if ($home->judul != null)
                            <h1 class="text-white fw-bold">{{ $home->judul }}</h1>
                        @else
                            <h1 class="text-white fw-bold">{{ $home->title }}</h1>
                        @endif
                    @endif
                    @if (session('lang') == 'en')
                        <p class="text-white">{{ $home->subtitle }}</p>
                    @elseif (session('lang') == 'id')
                        @if ($home->subjudul != null)
                            <p class="text-white">{{ $home->subjudul }}</p>
                        @else
                            <p class="text-white">{{ $home->subtitle }}</p>
                        @endif

                    @endif
                </div>
                <div class="col-4 ">
                    <div class="div">
                        <div class="d-flex justify-content-between ">
                            <div class="owl-carousel ">
                                @forelse ($news as $item)
                                    <div class="card borad-15 border-0" style="position: relative">
                                        <img class="borad-15" style="height: 250px; object-fit: cover;"
                                            src="{{ asset('image/news/' . $item->image) }}" alt="">
                                        <div class="card card-overlay-carousel ">
                                            <div class="d-flex justify-content-between align-items-center">

                                                <div class="col-10">

                                                    <h6 class=" px-3 fw-bold">{{ $item->title }}</h6>
                                                </div>
                                                <div class="col-2">
                                                    <a href="{{ route('news.detail', ['id' => $item->id]) }}">

                                                        <button class="btn btn-secondary">Detail</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="position: relative;">


        <svg style="position: absolute; bottom: 1%; left: 0; width: 100%; height: auto;z-index:1" width="1920"
            height="187" viewBox="0 0 1920 187" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.71"
                d="M1920 102.372V0C1920 0 1794 34 1681.5 37C1569 40 1520 2.5 1431 9C1342 15.5 1293 57.5 1196 69C1099 80.5 1055 25.0522 960.5 22C866 18.9478 743.574 78.1266 722.229 80.5511C700.884 82.9756 578.756 99.1389 409.885 33.6777C241.013 -31.7835 0 48.5729 0 48.5729V186.23H1920L1920 102.372Z"
                fill="#12648C" />
        </svg>


        <svg style="position: absolute; bottom: 1%; left: 0; width: 100%; height: auto;z-index:2" width="1920"
            height="233" viewBox="0 0 1920 233" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.74"
                d="M0 148.371L0 23.1774C0 23.1774 168.655 75.3258 190 77.7503C211.345 80.1748 322.744 143.211 491.615 77.7503C660.487 12.2891 835.5 96.1455 905 94.5726C974.5 92.9998 1005.5 55.5726 1123.5 55.5726C1241.5 55.5726 1306.5 69.5 1306.5 69.5C1306.5 69.5 1404 88.0002 1491 88.0002C1578 88.0002 1798.5 40.8546 1859.5 19.9273C1920.5 -1.00001 1920 -2.01473e-05 1920 -2.01473e-05V69.5L1920.5 232.23H1620.38H1440.25H960H0L0 148.371Z"
                fill="#04455D" />
        </svg>

        <svg style="position: absolute; bottom: 0; left: 0; width: 100%; height: auto;z-index:3" width="1920"
            height="156" viewBox="0 0 1920 156" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 67.222C0 67.222 102.404 31.6029 189.406 37.8093C276.409 44.0156 450.684 86.6507 468.517 87.9999C486.35 89.3491 549.575 105.809 718.446 40.2378C887.318 -25.3338 938 8.72155 960 18.1108C982 27.5 1102 76.5 1150.5 77.5C1199 78.5 1290 37.8892 1376.5 28C1463 18.1108 1495 57.5 1618.5 56C1742 54.5 1914 10 1917 9C1920 8 1920 9.5 1920 9.5V99.5V156H960H0L0 67.222Z"
                fill="#F8F8F8" />
        </svg>

    </div>

    <section class="py-5" style="background: linear-gradient(360deg, #FCFCFC 0%, #F8F8F8 100%)">
        <div class="d-flex justify-content-center py-5">
            <div class="col-6 py-5">
                <div class="card shadow-sm pt-4 pb-3 px-4 border-0" style="border-radius: 15px">

                    <h2 class="text-primary fw-bold">Cek Resi</h2>
                    <div class="card-body px-0 d-flex justify-content-between flex-wrap">
                        <div class="col-10 border border-1" style="border-radius: 10px">

                            <div class=" d-flex justify-content-between flex-wrap">
                                <div class="col-10 ps-1">
                                    <input placeholder="Please enter your waybill number." type="text"
                                        class="form-control border-0 ">
                                </div>
                                <div class="col-2 text-end">
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col text-end ps-3">
                            <button class="btn btn-secondary w-100 ">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="pt-5 container" style="background-color: #FCFCFC">
        <h2 class="text-center mt-3 fw-bold color-primary mb-5"><span style="border-radius: 8px"
                class="bg-primary color-secondary px-2 py-1 ">About</span> Us</h2>

        <div class="d-flex flex-wrap justify-content-between align-items-start pt-3">
            <div class="col-4 text-center">
                <img class="img-fluid" style="height: 300px" src="{{ asset('image/' . $about->image) }}"
                    alt="">
            </div>
            <div class="col-7">
                <h2 class="fw-bold">
                    @if (session('lang') == 'en')
                        {{ $about->title }}
                    @elseif (session('lang') == 'id')
                        @if ($about->judul != null)
                            {{ $about->judul }}
                        @else
                            {{ $about->title }}
                        @endif

                    @endif
                </h2>
                <h5>
                    @if (session('lang') == 'en')
                        {{ $about->subtitle }}
                    @elseif (session('lang') == 'id')
                        @if ($about->subjudul != null)
                            {{ $about->subjudul }}
                        @else
                            {{ $about->subtitle }}
                        @endif
                    @endif
                </h5>
            </div>
        </div>
    </section>


    <section style="padding-top: 240px">

        <div class="mt-5 pt-3" style="position: relative;">

            <div style="position: absolute; bottom: 0; left: 0;" class="wave wave-1"></div>
            <div style="position: absolute; bottom: 0; left: 0;" class="ship ship-1"></div>
            <div style="position: absolute; bottom: 0; left: 0;" class="wave wave-2"></div>
            <div style="position: absolute; bottom: 0; left: 0;" class=" ship-2"></div>
            <div style="position: absolute; bottom: 0; left: 0;" class="wave wave-3"></div>
        </div>
    </section>

    <section id="services">
        <div class="container pt-3 pb-5">

            <h2 class="text-center  fw-bold color-primary mb-5">Our <span style="border-radius: 8px"
                    class="bg-primary color-secondary px-2 py-1 ">Services</span></h2>

            @livewire('our-services')

        </div>
    </section>

    <section id="faq">
        <div class="container">
            <div class="card shadow-sm border-0 mb-5" style="border-radius: 20px">
                <div class="card-body">
                    <h2 class="text-center mt-5 fw-bold color-primary mb-5"><span style="border-radius: 8px"
                            class="bg-primary color-secondary px-2 py-1 ">Help</span> Centre</h2>

                    <div class="d-flex justify-content-between flex-wrap align-items-start">
                        <div class="col-5 text-center">
                            <img class="img-fluid w-75" src="{{ asset('image/faq.png') }}" alt="">
                        </div>
                        <div class="col-7">
                            <div class="card px-1  py-1"style="background-color: #F3F3F3;border-radius: 12px">
                                <div class="d-flex  flex-wrap align-items-center">

                                    <div class=" text-start ps-2">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <div class="col">
                                        <input placeholder="Search for solution" type="text"
                                            style="background-color: #F3F3F3" class="form-control border-0">
                                    </div>
                                </div>
                            </div>
                            <div class="div mt-2">
                                @livewire('help-center')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container pt-5 mb-5">
            <h2 class="text-center  fw-bold color-primary mb-5">Contact <span style="border-radius: 8px"
                    class="bg-primary color-secondary px-2 py-1 ">Us</span></h2>

            <div class="d-flex justify-content-between">
                <div class="col-6 justify-content-start ">
                    @livewire('contact-us')
                </div>
                <div class="col-6 ps-3">
                    @livewire('message')
                </div>
            </div>
            <div class="maps mt-5">
                <iframe class="borad-15" src="{{ $maps->maps_link }}" width="100%" height="450"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    @livewire('footer')


</div>
