@extends('layouts.master')
@section('content')
    <div class="d-flex justify-content-center  align-items-center " >
        <div class="col-3  mt-5 pt-5">
            <div class="card borad-20 border-0 px-3 shadow-sm">
                <div class="card-body">

                    <div class="d-flex flex-column gap-2">

                        <h2 class="text-center">Login</h2>
                        <input class="form-control " type="text" placeholder="Username">
                        <input class="form-control " type="password" placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button class="btn btn-secondary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
