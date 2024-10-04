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
                    <textarea required wire:model="desc" name="desc" id="desc" class="form-control" cols="10" rows="5"></textarea>
                    @error('desc')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 mb-3">
                <label for="Gambar" class="form-label ">image <small>(Max
                        4MB)</small> </label>
                <input required wire:model.defer="nama_gambar" type="file" class="form-control">
                <div class="text-danger" wire:loading wire:target="nama_gambar">
                    Uploading...
                </div>
                @error('nama_gambar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <button wire:click="submitAdd" class="btn btn-primary">Simpan</button>
            </div>
        </div>

    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#desc'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('desc', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</div>
