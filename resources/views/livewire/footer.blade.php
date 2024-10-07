<div>
    <footer class="bg-primary">
        <div class="d-flex justify-content-between container container-fluid  pt-5 flex-wrap-reverse flex-lg-wrap">
            <div class="col-lg-4 col-12 d-flex flex-column mt-4 mt-lg-0">
                <div class="d-flex justify-content-center justify-content-lg-start">

                    <img src="{{ asset('image/' . $data->image) }}" class="img-fluid" style="height: 81px ;width: 316px;"
                        alt="">
                </div>
                <p class="text-white">
                    @if (session('lang') == 'en')
                        <p class="text-white text-center text-lg-start">{{ $data->subtitle }}</p>
                    @elseif (session('lang') == 'id')
                        @if ($data->subjudul != null)
                            <p class="text-white text-center text-lg-start">{{ $data->subjudul }}</p>
                        @else
                            <p class="text-white text-center text-lg-start">{{ $data->subtitle }}</p>
                        @endif
                    @endif

                </p>
            </div>
            <div class="col-lg-4 col-6 ps-lg-5">
                <div class="d-flex flex-column gap-1">
                    <h5 class="fw-bold color-secondary text-start text-lg-start">Our Services</h5>
                    @forelse ($service as $item)
                        <h6 class="text-white text-start text-lg-start">{{ $item->title }}</h6>
                    @empty
                    @endforelse

                </div>
            </div>
            <div class="col-lg-4 col-6 ps-lg-5">
                <div class="d-flex flex-column gap-1">
                    <h5 class="fw-bold color-secondary text-end text-lg-start">Contact Us</h5>
                    @forelse ($contact as $item)
                        <a class="text-decoration-none" href="{{ $item->link }}" target="_blank">

                            <h6 class="text-white text-end text-lg-start">{{ $item->title }}</h6>

                        </a>

                    @empty
                    @endforelse

                </div>
            </div>
        </div>
        <div class="w-100 d-flex justify-content-center text-white py-3 mt-3" style="background-color: #161977">
            © Copyright {{ date('Y') }}
        </div>
    </footer>
</div>
