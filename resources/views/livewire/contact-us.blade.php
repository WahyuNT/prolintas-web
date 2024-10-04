<div>
    <div class="d-flex  flex-wrap">

        @foreach ($contact as $item)
            <div class="col-12 pe-3">

                <a class="text-decoration-none text-black" href=" @if ($item->link != null) {{$item->link}} @endif">


                    <div class="card shadow-sm border-0 borad-15 mb-2">
                        <div class="card-body d-flex justify-content-start">
                            <div style="height: 45px;width: 45px;"
                                class="card bg-secondary d-flex justify-content-center align-items-center">
                                <div style="font-size:1.8em"
                                    class="text-white m-0 p-0 d-flex justify-content-center align-items-center">
                                    {!! $item->icon !!}
                                </div>
                            </div>
                            <div class="d-flex align-items-start flex-column">
                                <h5 class="fw-bold ms-2 mb-0">{{ $item->title }}</h5>
                                <h6 class="ms-2 mb-0">{{ $item->desc }}</h6>
                            </div>
                        </div>
                    </div>
                </a>


            </div>
        @endforeach
    </div>
</div>
