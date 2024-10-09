<div>
    <div class="d-flex flex-row bg-white">
        <div class="container borad-20">

            <h1 class="text-center d-block d-lg-none  fw-bold color-primary "><span style="border-radius: 8px"
                    class="bg-primary color-secondary px-2 py-1  ">Gallery</span></h1>
            <h2 class="text-center d-none d-lg-block  fw-bold color-primary "><span style="border-radius: 8px"
                    class="bg-primary color-secondary px-2 py-1  ">Gallery</span></h2>
            <div class=" owl-two owl-carousel owl-theme mt-2">
                @forelse ($data as $item)
                    <img class="img-fluid img-gallery " data-aos="fade-up"
                        src="{{ asset('image/gallery/' . $item->image) }}" alt="">

                @empty
                @endforelse
            </div>

        </div>
    </div>
</div>
