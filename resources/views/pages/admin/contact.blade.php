@extends('layouts.master-admin')
@section('content')
    <div class="d-flex flex-wrap">
        <div class="col-12">
            @livewire('floating-admin')
        </div>
        <div class="col-12 ">
            @livewire('contact-admin')
        </div>
    </div>
@endsection
