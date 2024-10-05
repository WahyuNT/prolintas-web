<div>
    <div class="card border-0 shadow-sm borad-15">
        <div class="card-body">
            <h5 class="fw-bold text-center">Maps</h5>
            <div class="d-flex justify-content-between flex-wrap">
                <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
                    <div class="col-lg-11 col-12">

                        <div class="mb-lg-3 mb-2">
                            <label for="maps" class="form-label">Maps</label>
                            <textarea {{ $edit }} name="maps" class="form-control" wire:model.defer="maps" id="maps"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12  mb-2 mb-lg-0 ps-2 text-lg-end text-center">
                        @if ($edit == 'disabled')
                            <button wire:click="edit" class="btn btn-secondary">Edit</button>
                        @else
                            <button wire:click="simpan" class="btn btn-primary">Submit</button>
                        @endif
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <iframe class="borad-15" src="{{ $maps }}" width="100%" height="450"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
