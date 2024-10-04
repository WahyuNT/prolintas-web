<div>
    <footer class="bg-primary">
        <div class="d-flex justify-content-between container pt-5">
            <div class="col-4 d-flex flex-column">
                <img src="{{ asset('image/' . $data->image) }}" class="img-fluid" style="height: 81px ;width: 316px;"
                    alt="">
                <p class="text-white">
                    @if (session('lang') == 'en')
                        <h6 class="text-white">{{ $data->subtitle }}</h6>
                    @elseif (session('lang') == 'id')
                        @if ($data->subjudul != null)
                            <h6 class="text-white">{{ $data->subjudul }}</h6>
                        @else
                            <h6 class="text-white">{{ $data->subtitle }}</h6>
                        @endif
                    @endif

                </p>
            </div>
            <div class="col-4 ps-5">
                <div class="d-flex flex-column gap-1">
                    <h5 class="fw-bold color-secondary">Our Services</h5>
                    @forelse ($service as $item)
                        <h6 class="text-white">{{ $item->title }}</h6>
                    @empty
                    @endforelse

                </div>
            </div>
            <div class="col-4 ps-5">
                <div class="d-flex flex-column gap-1">
                    <h5 class="fw-bold color-secondary">Contact Us</h5>
                    @forelse ($contact as $item)
                        <a class="text-decoration-none" href="{{ $item->link }}" target="_blank">

                            <h6 class="text-white">{{ $item->title }}</h6>

                        </a>

                    @empty
                    @endforelse

                </div>
            </div>
        </div>
        <div class="w-100 d-flex justify-content-center text-white py-3 mt-3" style="background-color: #161977">
            © Copyright 2024
        </div>
    </footer>
</div>
