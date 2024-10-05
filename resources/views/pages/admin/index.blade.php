@extends('layouts.master-admin')
@section('content')
    <div class="d-flex flex-wrap">
        <div class="col-12 col-lg-6 pe-2">
            @livewire('title-admin')
        </div>
        <div class="col-12 col-lg-6 ps-2">
            @livewire('about-admin')
        </div>
        <div class="col-12 col-lg-6 ps-2">
            @livewire('header-admin')
        </div>
        <div class="col-12 col-lg-6 ps-2">
            @livewire('footer-admin')
        </div>
       
        <div class="col-12 ps-2">
            @livewire('maps-admin')
        </div>
    </div>
@endsection
