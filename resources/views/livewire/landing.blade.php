<div>
    <section id="home" class="bg-section pt-5 " style="background-image: url('{{ asset('image/' . $home->image) }}')">
        <div class="container-x container  h-100 ">
            <div class="d-flex align-items-center justify-content-center justify-content-lg-between h-75 flex-wrap">
                <div class="col-lg-6  col-12 d-flex mt-5 mt-lg-0 flex-column text-center text-lg-start ">
                    <div class="animate__animated animate__fadeInDown animate__delay-0-5s">

                        @if (session('lang') == 'en')
                            <h1 class="text-white fw-bold  ">
                                {{ $home->title }}</h1>
                        @elseif (session('lang') == 'id')
                            @if ($home->judul != null)
                                <h1 class="text-white fw-bold">{{ $home->judul }}</h1>
                            @else
                                <h1 class="text-white fw-bold">{{ $home->title }}</h1>
                            @endif
                        @endif
                    </div>
                    <div class="animate__animated animate__fadeInUp animate__delay-0-5s">

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
                </div>
                <div class="col-lg-4 col-12 col-md-8 ">
                    <div class="div">
                        <div
                            class="d-flex justify-content-between  animate__animated animate__pulse animate__fadeInRight animate__delay-0-5s">
                            <div class="owl-one owl-carousel  ">
                                @forelse ($news as $item)
                                    <div class="card borad-15 border-0" style="position: relative">
                                        <img class="borad-15 " style="height: 250px; object-fit: cover;"
                                            src="{{ asset('image/news/' . $item->image) }}" alt="">
                                        <div class="card card-overlay-carousel ">
                                            <div class="d-flex justify-content-between align-items-center">

                                                <div class="col-9">

                                                    <h6 class=" ps-3 pe-1 fw-bold">{{ $item->title }}</h6>
                                                </div>
                                                <div class="col-3 text-center">
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
        <div class="wave-landing">
            <img class="img-wave " src="{{ asset('image/waveOne.png') }}" alt="">
        </div>
    </div>


    <section class="py-5" style="background: linear-gradient(360deg, #FCFCFC 0%, #F8F8F8 100%)">
        <div class="d-flex justify-content-center py-5 container-x container ">
            <div class="col-lg-6 col-12 py-5 " data-aos="zoom-in-down">
                <div class="card shadow-sm pt-4 pb-3 px-4 border-0" style="border-radius: 15px">

                    <h2 class="text-primary fw-bold text-lg-start text-center">Cek Resi</h2>
                    <div class="card-body px-0 d-flex justify-content-between flex-wrap">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 border border-1" style="border-radius: 10px">
                            <div class=" d-flex justify-content-between flex-wrap w-100">
                                <div class="col-10   ps-1">
                                    <input placeholder="Please enter your waybill number." type="text"
                                        class="form-control border-0 ">
                                </div>
                                <div class="col-2  text-lg-end text-center">
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">

                            <div class="div d-flex justify-content-center   mt-lg-0">


                                <button disabled class="btn btn-secondary w-100 ">Search</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="div">
            @livewire('wave-gallery')
        </div>
    </section>
    <section id="about" class="pt-5 container-x container " style="background-color: #FCFCFC">
        <div class="mt-3 mb-3" data-aos="fade-down">

            <h1 class="text-center d-block d-lg-none  fw-bold color-primary "><span style="border-radius: 8px"
                    class="bg-primary color-secondary px-2 py-1 ">About</span> Us</h1>
            <h2 class="text-center d-none d-lg-block  fw-bold color-primary "><span style="border-radius: 8px"
                    class="bg-primary color-secondary px-2 py-1 ">About</span> Us</h2>
        </div>

        <div class="d-flex flex-wrap justify-content-between align-items-start pt-3">
            <div class="col-lg-4 col-12 text-center">
                <img data-aos="fade-right" class="img-fluid img-about" src="{{ asset('image/' . $about->image) }}"
                    alt="">
            </div>
            <div class="col-lg-7 col-12 " data-aos="fade-left">
                <h2 class="fw-bold text-center text-lg-start">
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
                <p class=" text-center text-lg-start">
                    @if (session('lang') == 'en')
                        {{ $about->subtitle }}
                    @elseif (session('lang') == 'id')
                        @if ($about->subjudul != null)
                            {{ $about->subjudul }}
                        @else
                            {{ $about->subtitle }}
                        @endif
                    @endif
                </p>
            </div>
        </div>
    </section>


    <section style="padding-top: 240px">

        <div class="mt-5 pt-3" style="position: relative;">

            <div style="position: absolute; bottom: 0; left: 0;" class="wave wave-1"></div>
            <div style="position: absolute; bottom: 0; left: 0;" class="ship ship-1 d-lg-block d-none"></div>
            <div style="position: absolute; bottom: 0; left: 0;" class="wave wave-2"></div>
            <div style="position: absolute; bottom: 0; left: 0;" class=" ship-2 d-lg-block d-none"></div>
            <div style="position: absolute; bottom: 0; left: 0;" class="wave wave-3"></div>
        </div>
    </section>

    <section id="services">
        <div class="container-x container  pt-3 pb-5">
            <div class="div mb-5" data-aos="zoom-in-up">

                <h2 class="text-center d-block d-lg-none fw-bold color-primary ">Our <span style="border-radius: 8px"
                        class="bg-primary color-secondary px-2 py-1 ">Services</span></h2>
                <h2 class="text-center d-none d-lg-block fw-bold color-primary ">Our <span style="border-radius: 8px"
                        class="bg-primary color-secondary px-2 py-1 ">Services</span></h2>
            </div>
            <div class="div">

                @livewire('our-services')
            </div>

        </div>
    </section>

    <section id="faq">
        <div class="container-x container ">
            <div class="card shadow-sm border-0 mb-5" style="border-radius: 20px">
                <div class="card-body">
                    <h2 data-aos="zoom-out" class="text-center mt-5 fw-bold color-primary mb-2"><span
                            style="border-radius: 8px" class="bg-primary color-secondary px-2 py-1 ">Help</span>
                        Centre</h2>

                    <div class="d-flex justify-content-between flex-wrap align-items-start">
                        <div class="col-lg-5 col-12 text-center">
                            <img data-aos="zoom-in-right" class="img-fluid w-75" src="{{ asset('image/faq.png') }}"
                                alt="">
                        </div>
                        <div class="col-lg-7 col-12">

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
        <div class="container-x container  pt-5 mb-5">
            <h2 data-aos="zoom-out-down" class="text-center  fw-bold color-primary mb-5">Contact <span
                    style="border-radius: 8px" class="bg-primary color-secondary px-2 py-1 ">Us</span></h2>

            <div class="d-flex justify-content-between flex-wrap">
                <div class="col-lg-6 col-12 justify-content-start ">
                    @livewire('contact-us')
                </div>
                <div class="col-lg-6 col-12 ps-lg-3">
                    @livewire('message')
                </div>
            </div>
            <div class="col-12 d-flex justify-content-between flex-wrap">

                <div class=" col-lg-6 col-12 pe-lg-2">
                    <div class="maps mt-4" data-aos="fade-up">
                        <h5 class="fw-bold">Cabang </h5>
                        <iframe class="borad-15" src="{{ $maps->maps_link }}" width="100%" height="450"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class=" col-lg-6 col-12 ps-lg-2">

                    <div class="maps mt-4" data-aos="fade-up">
                        <h5 class="fw-bold">Cabang </h5>
                        <iframe class="borad-15" src="{{ $maps->maps_link }}" width="100%" height="450"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @livewire('footer')


</div>
