<div>
    <div class="container col-lg-6 col-12 d-flex justify-content-center flex-column mb-5 pt-3">
        <img class="img-fluid" style="height: 350px" src="{{ asset('image/news/' . $news->image) }}" alt="">
        <h2 class="text-center text-black fw-bold my-3">
            {{ $news->judul }}</h2>
        <img class="rounded w-100 mb-3" src="{{ asset('images/news/' . $news->image) }}" alt="">

        <div class="card border-0  ">
            <div class="card-body">
                {!! $news->desc !!}</div>
        </div>
    </div>
</div>
