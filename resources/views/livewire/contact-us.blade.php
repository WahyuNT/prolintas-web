<div>
    <div class="d-flex  flex-wrap">

        @foreach ($contact as $item)
            <div class="col-12 pe-3">

                <div class="card shadow-sm border-0 borad-15 mb-2">
                    <div class="card-body d-flex justify-content-start">
                        <div style="height: 50px;width: 50px;"
                            class="card bg-secondary d-flex justify-content-center align-items-center">
                            {{-- <i class="fa-brands fa-xl fa-instagram text-white"></i> --}}
                        </div>
                        <div class="d-flex align-items-start flex-column">

                            <h5 class="fw-bold ms-2 mb-0">{{ $item->title }}</h5>
                            <h6 class="ms-2 mb-0">{{ $item->desc }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
