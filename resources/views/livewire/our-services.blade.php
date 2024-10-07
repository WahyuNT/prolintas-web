<div>
    <div class="d-flex flex-wrap justify-content-center" wire:ignore>
        @foreach ($services as $item)
            <div class="col-lg-3 col-6 col-md-6  mb-4 px-lg-3 px-2" data-aos="zoom-in-down">
                <div class="card h-100 px-0 px-lg-2 shadow-sm border-0" style="border-radius: 20px">
                    <div class="card-body py-4 d-flex flex-column align-items">
                        <div class="mb-auto">

                            <div class="d-flex justify-content-center">

                                <div class="card bg-secondary text-center p-1 " style="height: 60px;width: 60px;">
                                    <img class="img-fluid" src="{{ asset('image/services/' . $item->icon) }}"
                                        alt="">
                                </div>
                            </div>
                            @if (session('lang') == 'en')
                                <h5 class="card-title fw-bold color-primary text-center mt-3">{{ $item->title }}</h5>
                            @elseif (session('lang') == 'id')
                                @if ($item->judul != null)
                                    <h5 class="card-title fw-bold color-primary text-center mt-3">{{ $item->judul }}
                                    </h5>
                                @else
                                    <h5 class="card-title fw-bold color-primary text-center mt-3">{{ $item->title }}
                                    </h5>
                                @endif
                            @endif
                        </div>
                        <div class="div">

                            <div class="d-flex justify-content-center">
                                <button data-bs-toggle="modal" data-bs-target="#serviceModal{{ $item->id }}"
                                    class="btn btn-secondary">Detail</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        @endforeach




    </div>
</div>
@forelse ($services as $item)
    <!-- Modal -->
    <div class="modal fade" id="serviceModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">

            <div class="modal-content">

                <div class="modal-body">
                    <div class="d-flex justify-content-start">
                        <div class="div ">
                            <div class="card bg-secondary text-center p-1 " style="height: 60px;width: 60px;">
                                <img class="img-fluid" src="{{ asset('image/services/' . $item->icon) }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="div ps-2">
                            <h5 class="fw-bold color-primary mb-1">

                                @if (session('lang') == 'en')
                                    {{ $item->title }}
                                @elseif (session('lang') == 'id')
                                    @if ($item->judul != null)
                                        {{ $item->judul }}
                                    @else
                                        {{ $item->title }}
                                    @endif
                                @endif
                            </h5>
                            <p>
                                @if (session('lang') == 'en')
                                    {{ $item->desc }}
                                @elseif (session('lang') == 'id')
                                    @if ($item->deskripsi != null)
                                        {{ $item->deskripsi }}
                                    @else
                                        {{ $item->desc }}
                                    @endif
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button data-bs-dismiss="modal" class="btn btn-secondary">Close</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
@empty
@endforelse
