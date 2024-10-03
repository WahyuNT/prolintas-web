<div>
    <div class="card border-0 shadow-sm borad-15">
        <div class="card-body">
            <h5 class="fw-bold text-center">Title Page</h5>
            <div class="d-flex justify-content-between flex-wrap">
                <div class="col-12 mb-3">

                    <label for="image" class="form-label">Image</label><br>
                    <img class="img-fluid rounded" id="image" style="height: 120px" src="{{ asset('image/' . $image) }}"
                        alt="">
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input disabled type="text" class="form-control" wire:model="title" id="title"
                            aria-describedby="titlesection">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sub Title</label>
                        <input disabled type="text" class="form-control" wire:model="subtitle" id="subtitle"
                            aria-describedby="titlesection">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-secondary">Edit</button>
            </div>
        </div>
    </div>
</div>
