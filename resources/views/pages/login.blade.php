@extends('layouts.master')
@section('content')
    <div class="d-flex justify-content-center  align-items-center ">
        <div class="col-3  mt-5 pt-5">
            <div class="card borad-20 border-0 px-3 shadow-sm">
                <div class="card-body">
                    <form method="POST" action="{{ route('login.proses') }}">
                        @csrf
                        <div class="d-flex flex-column gap-2">
                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <h2 class="text-center">Login</h2>
                            <input class="form-control " required name="username" type="text" placeholder="Username">
                            <input class="form-control " required name="password" type="password" placeholder="Password">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="div">
        <div class="accordion accordion-flush mb-2" id="accordionParent">
            <div class="accordion-item border border-2" style="border-radius: 12px">
                <h2 class="accordion-header">
                    <button style="border-radius: 12px" class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#flush-2}" aria-expanded="false" aria-controls="flush-2}">
                        2
                    </button>
                </h2>
                <div id="flush-2}" class="accordion-collapse collapse" data-bs-parent="#accordionParent">
                    <div class="accordion-body"> 2</div>
                </div>
            </div>
        </div>

    </div>
@endsection
