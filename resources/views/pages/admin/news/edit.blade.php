@extends('layouts.master-admin')
@section('content')
    <div class="d-flex flex-wrap">
        <div class="col-12 ">

            @livewire('news-admin-edit', ['newsId' => $id])
        </div>

    </div>
@endsection
