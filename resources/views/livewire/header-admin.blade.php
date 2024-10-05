<div>
    <div class="card border-0 shadow-sm borad-15" >
        <div class="card-body">
            <h5 class="fw-bold text-center">Header</h5>
            <div class="d-flex justify-content-between flex-wrap">
                <div class="col-12 mb-3 d-flex justify-content-start align-items-center">
                    <div class="div">

                        <label for="image" class="form-label">Image</label><br>
                        <img class="img-fluid rounded" id="image" style="height: 120px"
                            src="{{ asset('image/' . $image) }}" alt="">
                    </div>
                </div>
                <div class="col-12 ">

                    @if ($edit != 'disabled')
                        <div class="col mb-3">
                            <label for="Gambar" class="form-label ">New Image <small>(Max
                                    4MB)</small> </label><br>

                            <input required wire:model.defer="image_baru" type="file" class="form-control">
                            <div class="text-danger" wire:loading wire:target="image_baru">
                                Uploading...
                            </div>
                            @error('image_baru')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif
                </div>
                
            </div>
            <div class="d-flex justify-content-center">
                @if ($edit == 'disabled')
                    <button wire:click="edit" class="btn btn-secondary">Edit</button>
                @else
                    <button wire:click="simpan" class="btn btn-primary">Submit</button>
                @endif
            </div>
        </div>
    </div>
</div>
