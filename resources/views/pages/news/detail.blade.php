@extends('layouts.master')
@section('content')
    @livewire('news-detail', ['newsId' => $id])
@endsection
