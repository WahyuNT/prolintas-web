<div>
    <div class="d-flex justify-content-start flex-wrap ">

        @forelse ($news as $item)
            <div class="col-12 col-md-6 col-sm-12 col-lg-4 px-2 mb-3">
                <div class="card borad-15 border-0" style="position: relative">
                    <img class="borad-15" style="height: 200px; object-fit: cover;"
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
            </div>
        @empty
        @endforelse
    </div>
</div>
