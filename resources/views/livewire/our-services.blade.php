<div>
    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($services as $item)
            <div class="col-3 mb-4 px-3">
                <div class="card h-100 px-2 shadow-sm border-0" style="border-radius: 20px">
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-center">

                            <div class="card bg-secondary text-center " style="height: 50px;width: 50px;">

                            </div>
                        </div>
                        <h5 class="card-title fw-bold color-primary text-center mt-4">{{ $item->title }}</h5>
                        <p class="card-text text-center">{{ $item->desc }}</p>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
