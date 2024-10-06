<div>
    <div class="card border-0 shadow-sm borad-15">
        <div class="card-body">
            <h5 class="fw-bold text-center">Floating Contact</h5>
            <div class="d-flex justify-content-between flex-wrap">
                <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
                    <div class="col-lg-11 col-12">

                        <div class="mb-lg-3 mb-2">
                            <label for="description" class="form-label">Nomor <small class="text-muted">(gunakan kode
                                    negara tanpa +)</small></label>
                            <input {{ $edit }} placeholder="6289xxxxx" type="text" class="form-control"
                                wire:model.defer="description" id="title" aria-describedby="titlesection">
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-lg-3 mb-2">
                            <label for="icon" class="form-label">Icon</label>
                            <div class="d-flex justify-content-start align-items-lg-center">

                                <div class="div">
                                    {!! $icon !!}
                                </div>
                                <div class="w-100 ps-2">

                                    <input {{ $edit }} type="text" class="form-control"
                                        wire:model.defer="icon" id="title" aria-describedby="titlesection">
                                    @error('icon')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
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

            </div>

        </div>
    </div>
</div>
