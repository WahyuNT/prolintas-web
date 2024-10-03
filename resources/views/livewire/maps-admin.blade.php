<div>
    <div class="card border-0 shadow-sm borad-15">
        <div class="card-body">
            <h5 class="fw-bold text-center">Maps</h5>
            <div class="d-flex justify-content-between flex-wrap">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <div class="col-11">

                        <div class="mb-3">
                            <label for="maps" class="form-label">Maps</label>
                            <textarea {{ $edit }} name="maps" class="form-control" wire:model.defer="maps" id="maps"></textarea>
                        </div>
                    </div>
                    <div class="col-1 ps-2 text-end">
                        @if ($edit == 'disabled')
                            <button wire:click="edit" class="btn btn-secondary">Edit</button>
                        @else
                            <button wire:click="simpan" class="btn btn-primary">Simpan</button>
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
