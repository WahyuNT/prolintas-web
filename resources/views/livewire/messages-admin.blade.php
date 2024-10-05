<div>
    <div class="d-flex justify-content-between mt-3">
        <div class="div">

            <h3 class="text-center fw-bold color-primary">Messages</h3>
        </div>



    </div>
    <div class=" border-0 mt-2 borad-15">
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->message }}</td>
                            <td>{{ $item->created_at }}</td>
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

                                        <button wire:click="deleteConfirm({{ $item->id }})"
                                            class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No Message</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>

</div>
