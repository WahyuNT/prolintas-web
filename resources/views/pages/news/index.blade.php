@extends('layouts.master')
@section('content')
    <div class="container">
        <h1 class="text-primary fw-bold text-center mt-2 mb-2">News</h1>
        @livewire('news-list')
    </div>
@endsection
