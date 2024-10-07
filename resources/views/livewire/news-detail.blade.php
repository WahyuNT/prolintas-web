<div>

    <div
        class="container container-fluid  col-lg-6 col-md-10 col-12 d-flex justify-content-center flex-column mb-5 pt-3">


        <h2 class="text-center text-black fw-bold my-3 pt-5">
            {{ $news->title }}</h2>
        <div class="card border-0  ">
            <img class="img-fluid mt-2 rounded mb-2" style="height: 350px ;object-fit: cover "
                src="{{ asset('image/news/' . $news->image) }}" alt="">
            <div class="card-body">
                {!! $news->desc !!}</div>
        </div>
    </div>
</div>
