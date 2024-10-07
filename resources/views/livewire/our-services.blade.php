<div>
    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($services as $item)
            <div class="col-lg-3 col-6 col-md-6  mb-4 px-lg-3 px-2" data-aos="zoom-in-down">
                <div class="card h-100 px-0 px-lg-2 shadow-sm border-0" style="border-radius: 20px">
                    <div class="card-body py-4 d-flex flex-column align-items">
                        <div class="mb-auto">

                            <div class="d-flex justify-content-center">
    
                                <div class="card bg-secondary text-center p-1 " style="height: 60px;width: 60px;">
                                    <img class="img-fluid" src="{{ asset('image/services/' . $item->icon) }}" alt="">
                                </div>
                            </div>
                            @if (session('lang') == 'en')
                                <h5 class="card-title fw-bold color-primary text-center mt-3">{{ $item->title }}</h5>
                            @elseif (session('lang') == 'id')
                                @if ($item->judul != null)
                                    <h5 class="card-title fw-bold color-primary text-center mt-3">{{ $item->judul }}</h5>
                                @else
                                    <h5 class="card-title fw-bold color-primary text-center mt-3">{{ $item->title }}</h5>
                                @endif
                            @endif
                        </div>
                        <div class="div">

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-secondary">Detail</button>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
