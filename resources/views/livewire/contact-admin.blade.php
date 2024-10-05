<div>
    <div>
        <div class="d-flex justify-content-between mt-3">
            <div class="div">

                <h3 class="text-center fw-bold color-primary">Contact</h3>
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
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Desc</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Set</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="card border-0 bg-secondary text-center d-flex justify-content-center align-items-center  "
                                                style="height: 50px;width: 50px;">
                                                <div style="font-size:2em"
                                                    class="text-white m-0 p-0 d-flex justify-content-center align-items-center">
                                                    {!! $item->icon !!}
                                                </div>

                                            </div>
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->desc }}</td>
                                        <td>
                                            @if ($item->link)
                                                {{ $item->link }}
                                            @else
                                                -
                                            @endif
                                        </td>

                                        </td>
                                        <td>
                                            @if ($item->is_active)
                                                <span class="badge bg-success"><i class="fa-solid fa-eye"></i></span>
                                            @else
                                                <span class="badge bg-danger"><i
                                                        class="fa-solid fa-eye-slash"></i></span>
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
                                                <div class="d-flex justify-content-start gap-1">

                                                    <button wire:click="cancelDelete()"
                                                        class="btn btn-secondary btn-sm">Batal</button>
                                                    <button wire:click="delete({{ $item->id }})"
                                                        class="btn btn-danger btn-sm">Delete</button>
                                                </div>
                                            @else
                                                <div class="d-flex justify-content-start gap-1">

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
                                        <label for="icon" class="form-label">Icon </label>
                                        <small class="text-muted"> search icon in <a
                                                href="https://fontawesome.com">fontawesome.com</a> </small>
                                        <input required type="text" class="form-control" wire:model.defer="icon"
                                            id="icon" aria-describedby="titlesection">
                                        @error('icon')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="link" class="form-label">Link</label>
                                        <input required type="text" class="form-control" wire:model.defer="link"
                                            id="link" aria-describedby="titlesection">
                                        @error('link')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
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
                                <label for="icon" class="form-label">Icon </label>
                                <small class="text-muted"> search icon in <a
                                        href="https://fontawesome.com">fontawesome.com</a> </small>
                                <input required type="text" class="form-control" wire:model.defer="icon"
                                    id="icon" aria-describedby="titlesection">
                                @error('icon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input required type="text" class="form-control" wire:model.defer="link"
                                    id="link" aria-describedby="titlesection">
                                @error('link')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">

                            <button wire:click="submitAdd" class="btn btn-primary">Submit</button>

                        </div>
                    </div>

                </div>
            @endif

        </div>
    </div>

</div>
