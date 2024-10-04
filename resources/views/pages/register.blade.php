@extends('layouts.master')
@section('content')
    <div class="d-flex justify-content-center  align-items-center ">
        <div class="col-lg-3 col-10  mt-5 pt-5">
            <div class="card borad-20 border-0 px-3 shadow-sm">
                <div class="card-body">
                    <form action="{{ route('register.proses') }}" method="POST">
                        @csrf
                        <div class="d-flex flex-column gap-2">
                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <h2 class="text-center">Login</h2>
                            <input required class="form-control" name="username" type="text" placeholder="Username">
                            @error('username')
                                <span class="text danger">{{ $message }}</span>
                            @enderror
                            <input required class="form-control" name="email" type="email" placeholder="E-Mail">
                            @error('email')
                                <span class="text danger">{{ $message }}</span>
                            @enderror
                            <input required class="form-control" name="password" type="password" placeholder="Password">
                            @error('password')
                                <span class="text danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center mt-4">

                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
