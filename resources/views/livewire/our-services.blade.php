<div>
    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($services as $item)
            <div class="col-lg-3 col-12 mb-4 px-3">
                <div class="card h-100 px-2 shadow-sm border-0" style="border-radius: 20px">
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-center">

                            <div class="card bg-secondary text-center p-1 " style="height: 60px;width: 60px;">
                                <img class="img-fluid" src="{{ asset('image/services/' . $item->icon) }}" alt="">
                            </div>
                        </div>
                        @if (session('lang') == 'en')
                            <h5 class="card-title fw-bold color-primary text-center mt-3">{{ $item->title }}</h5>
                            <p class="card-text text-center">{{ $item->desc }}</p>
                        @elseif (session('lang') == 'id')
                            @if ($item->judul != null)
                                <h5 class="card-title fw-bold color-primary text-center mt-3">{{ $item->judul }}</h5>
                            @else
                                <h5 class="card-title fw-bold color-primary text-center mt-3">{{ $item->title }}</h5>
                            @endif

                            @if ($item->deskripsi != null)
                                <p class="card-text text-center">{{ $item->deskripsi }}</p>
                            @else
                                <p class="card-text text-center">{{ $item->desc }}</p>
                            @endif
                        @endif


                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
