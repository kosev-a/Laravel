@extends('layouts.main')
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Список категорий</h1>
        </div>
    </div>
@endsection
@section('content')
    @forelse($categoriesList as $category)
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <strong>
                        <a href="{{ route('categories.show', ['id' => $category['id']]) }}">
                            {{ $category['title'] }}
                        </a>
                    </strong>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">ID: <em>{{ $category['id'] }}</em></small>
                        <small class="text-muted">Название: <em>{{ $category['title'] }}</em></small>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <h2>Категорий нет</h2>
    @endforelse
@endsection
