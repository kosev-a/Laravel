@extends('layouts.main')
@section('header')
<div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $news['title'] }}</h1>
        </div>
</div>
@endsection
@section('content')
<div class="col">
    <div class="card shadow-sm">
        <img src="{{ $news['image'] }}">
        <br>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Статус: <em>{{ $news['status'] }}</em></small>
                <small class="text-muted">Автор: <em>{{ $news['author'] }}</em></small>
            </div>
            <p class="card-text">{!! $news['description'] !!}</p>
        </div>
    </div>
</div>
@endsection
