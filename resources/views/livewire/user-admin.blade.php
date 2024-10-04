<div>
    <div class="d-flex justify-content-between mt-3">
        <div class="div">

            <h3 class="text-center fw-bold color-primary">User Settings</h3>
        </div>




    </div>
    <div class="div">

        <div class="card-body">
            <div class="d-flex justify-content-between flex-wrap">

                <div class="col-12">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input required type="text" class="form-control" wire:model.defer="username" id="username"
                            aria-emailribedby="usernamesection">
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input required type="email" class="form-control" wire:model.defer="email" id="email"
                            aria-emailribedby="usernamesection">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input required type="password" class="form-control" wire:model.defer="password" id="password"
                            aria-emailribedby="usernamesection">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>




                <div class="d-flex justify-content-center">

                    <button wire:click="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>

        </div>
    </div>

</div>
