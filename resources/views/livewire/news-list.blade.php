<div>
    <div class="d-flex justify-content-start flex-wrap ">

        @forelse ($news as $item)
            <div class="col-4 px-2 mb-3">
                <div class="card borad-15 border-0" style="position: relative">
                    <img class="borad-15" style="height: 200px; object-fit: cover;"
                        src="{{ asset('image/news/' . $item->image) }}" alt="">
                    <div class="card card-overlay-carousel ">
                        <div class="d-flex justify-content-between align-items-center">

                            <div class="col-10">
                                <h6 class=" px-3 fw-bold">{{ $item->title }}</h6>
                            </div>
                            <div class="col-2 ">
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
