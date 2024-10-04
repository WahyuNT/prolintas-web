<div>
    <div class="d-flex justify-content-between mt-3">
        <div class="div">

            <h3 class="text-center fw-bold color-primary">FAQ</h3>
        </div>
        <div class="div">
            @if ($add != 'add' && $edit == null)
                <button wire:click="add" class="btn btn-secondary">Add</button>
            @endif
        </div>

    </div>
    <div class=" border-0 mt-2 borad-15">
        @if ($add != 'add')
            @if ($edit == null)
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Judul 🇮🇩</th>
                                <th scope="col">Desc</th>
                                <th scope="col">Deskripsi 🇮🇩</th>
                                <th scope="col">Status</th>
                                <th scope="col">Set</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->desc }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>
                                        @if ($item->is_active)
                                            <span class="badge bg-success"><i class="fa-solid fa-eye"></i></span>
                                        @else
                                            <span class="badge bg-danger"><i class="fa-solid fa-eye-slash"></i></span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->is_active)
                                            <span wire:click="inactive({{ $item->id }})"
                                                class="btn badge  bg-danger ">Set Inactive</span>
                                        @else
                                            <span wire:click="active({{ $item->id }})"
                                                class="btn badge  bg-success ">Set Active</span>
                                        @endif
                                    </td>
                                    <td>

                                        @if ($confirmDelete == $item->id)
                                            <span class="text-center mb-1">Are you sure?</span>
                                            <div class="d-flex justify-content-between gap-1">

                                                <button wire:click="cancelDelete()"
                                                    class="btn btn-secondary btn-sm">Batal</button>
                                                <button wire:click="delete({{ $item->id }})"
                                                    class="btn btn-danger btn-sm">Delete</button>
                                            </div>
                                        @else
                                            <div class="d-flex justify-content-between gap-1">

                                                <button wire:click="edit({{ $item->id }})"
                                                    class="btn btn-primary btn-sm">Edit</button>
                                                <button wire:click="deleteConfirm({{ $item->id }})"
                                                    class="btn btn-danger btn-sm">Delete</button>
                                            </div>
                                        @endif


                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            @else
                <div class="div">
                    <div class="d-flex">
                        <div class="col-2">
                            <button wire:click="back" class="btn btn-secondary"><i
                                    class="fa-solid fa-arrow-left"></i></button>
                        </div>
                        <div class="col-10 text-center">
                            <h5 class="fw-bold">
                                {{ $title }}
                            </h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-wrap">

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input required type="text" class="form-control" wire:model.defer="title"
                                        id="title" aria-describedby="titlesection">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="desc" class="form-label">Description</label>
                                    <input required type="text" class="form-control" wire:model.defer="desc"
                                        id="desc" aria-describedby="titlesection">
                                    @error('desc')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul <span class="text-muted">(Indonesia)</span></label>
                                    <input required type="text" class="form-control" wire:model.defer="judul"
                                        id="judul" aria-describedby="titlesection">
                                    @error('judul')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi <span class="text-muted">(Indonesia)</span></label>
                                    <input required type="text" class="form-control" wire:model.defer="deskripsi"
                                        id="deskripsi" aria-describedby="titlesection">
                                    @error('deskripsi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-2 ">

                                <small class=" text-danger text-center ">Jika kolom indonesia kosong, akan otomatis
                                    diisi
                                    menggunakan bahasa
                                    Inggris.</small>
                            </div>
                            <div class="d-flex justify-content-center">

                                <button wire:click="simpan" class="btn btn-primary">Submit</button>

                            </div>
                        </div>

                    </div>
                </div>
            @endif
        @else
            <div class="card-body">
                <button wire:click="back" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i></button>
                <div class="d-flex justify-content-between flex-wrap">

                    <div class="col-12">
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
                        <div class="mb-3">
                            <label for="desc" class="form-label">Description</label>
                            <input required type="text" class="form-control" wire:model.defer="desc" id="desc"
                                aria-describedby="titlesection">
                            @error('desc')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul <span class="text-muted">(Indonesia)</span></label>
                            <input required type="text" class="form-control" wire:model.defer="judul"
                                id="judul" aria-describedby="titlesection">
                            @error('judul')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi <span class="text-muted">(Indonesia)</span></label>
                            <input required type="text" class="form-control" wire:model.defer="deskripsi"
                                id="deskripsi" aria-describedby="titlesection">
                            @error('deskripsi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mb-2 ">

                        <small class=" text-danger text-center ">Jika kolom indonesia kosong, akan otomatis
                            diisi
                            menggunakan bahasa
                            Inggris.</small>
                    </div>

                    <div class="d-flex justify-content-center">

                        <button wire:click="submitAdd" class="btn btn-primary">Submit</button>

                    </div>
                </div>

            </div>
        @endif

    </div>
</div>
