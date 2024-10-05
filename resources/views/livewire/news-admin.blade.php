<div>
    <div class="d-flex justify-content-between mt-3">
        <div class="div">

            <h3 class="text-center fw-bold color-primary">NEWS</h3>
        </div>

        <div class="div">
            <a href="{{ route('admin.news.add') }}">
                <button class="btn btn-secondary">Add</button>
            </a>
        </div>

    </div>
    <div class=" border-0 mt-2 borad-15">
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
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
                                <img class="img-fluid img-news-table"
                                    src="{{ asset('image/news/' . $item->image) }}" alt="">
                            </td>
                            <td>{{ $item->title }}</td>
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
                                    <div class="d-flex justify-content-start gap-1">

                                        <button wire:click="cancelDelete()"
                                            class="btn btn-secondary btn-sm">Batal</button>
                                        <button wire:click="delete({{ $item->id }})"
                                            class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                @else
                                    <div class="d-flex justify-content-start gap-1">

                                        <a href="{{ route('admin.news.edit', $item->id) }}">
                                            <button wire:click="edit({{ $item->id }})"
                                                class="btn btn-primary btn-sm">Edit</button>
                                        </a>
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

    </div>

</div>
