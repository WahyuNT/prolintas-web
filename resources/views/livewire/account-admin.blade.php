<div>
    <div>
        <div class="d-flex justify-content-between mt-3">
            <div class="div">

                <h3 class="text-center fw-bold color-primary">Account</h3>
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
                                    <th scope="col">Username</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">E-Mail</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $item->username }}</td>
                                        <td>
                                            @if ($item->role == 'super_admin')
                                                Super Admin
                                            @else
                                                Admin
                                            @endif
                                        </td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @if ($myId != $item->id)
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
                                            @else
                                                <small class="bg-primary rounded-pill text-white px-2 py-1 ">You</small>
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
                                    {{ $username }}
                                </h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-wrap">

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input required type="text" class="form-control" wire:model.defer="username"
                                            id="username" aria-emailribedby="usernamesection">
                                        @error('username')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select wire:model="role" class="form-select" aria-label="Default select example">
                                            <option selected>Select Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="super_admin">Super Admin</option>

                                        </select>
                                        @error('role')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input required type="email" class="form-control" wire:model.defer="email"
                                            id="email" aria-emailribedby="usernamesection">
                                        @error('email')
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
                                <label for="username" class="form-label">Username</label>
                                <input required type="text" class="form-control" wire:model.defer="username"
                                    id="username" aria-emailribedby="usernamesection">
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input required type="email" class="form-control" wire:model.defer="email"
                                    id="email" aria-emailribedby="usernamesection">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input required type="text" class="form-control" wire:model.defer="password"
                                    id="password" aria-emailribedby="usernamesection">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select wire:model="role" class="form-select" aria-label="Default select example">
                                    <option selected>Select Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="super_admin">Super Admin</option>

                                </select>
                                @error('role')
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
