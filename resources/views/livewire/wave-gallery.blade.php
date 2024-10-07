<div>
    <div class="d-flex flex-row " style="background-color: #1a6a8d">
        <div class="container borad-20">

            <div class=" owl-two owl-carousel owl-theme" data-aos="fade-up">
                @forelse ($data as $item)
                    <img class="img-fluid img-gallery" src="{{ asset('image/gallery/' . $item->image) }}" alt="">
                @empty
                @endforelse
            </div>

        </div>
    </div>
</div>
