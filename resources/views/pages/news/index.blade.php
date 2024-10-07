@extends('layouts.master')
@section('content')
    <div class="container container-fluid  pt-5">
        <h1 class="text-primary fw-bold text-center  mb-2 pt-4">News</h1>
        @livewire('news-list')
    </div>
@endsection
