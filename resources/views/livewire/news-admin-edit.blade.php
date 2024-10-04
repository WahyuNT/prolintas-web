<div>
    <div class="card-body">
        <a href="{{ route('admin.news') }}">
            <button class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i></button>
        </a>
        <div class="d-flex justify-content-between flex-wrap">

            <div class="col-12 mt-3">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input required type="text" class="form-control" wire:model.defer="title" id="title"
                        aria-describedby="titlesection">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div wire:ignore class="mb-3">
                    <label for="title" class="form-label">Description</label>
                    <textarea required wire:model.defer="desc" name="desc" id="desc" class="form-control" cols="10"
                        rows="5"></textarea>
                    @error('desc')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 mb-3">
                <label for="Gambar" class="form-label ">image <small>(Max
                        4MB)</small> </label><br>
                <img class="img-fluid mb-2" style="height: 130px" src="{{ asset('image/news/' . $image) }}"
                    alt="">
                <input required wire:model.defer="image_baru" type="file" class="form-control">
                <div class="text-danger" wire:loading wire:target="image_baru">
                    Uploading...
                </div>
                @error('image_baru')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <button wire:click="simpan" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </div>
    <script>
        document.addEventListener('livewire:load', function() {
            ClassicEditor
                .create(document.querySelector('#desc'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        Livewire.emit('setDesc', editor.getData());
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</div>
