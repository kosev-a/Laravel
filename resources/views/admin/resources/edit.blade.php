@extends('layouts.admin')
@section('title') Редактировать ресурс @endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать ресурс</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div class="raw">
        @include('inc.messages')
        <form method="post" action="{{ route('admin.resources.update', ['resource' => $resource]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="link">Ссылка</label>
                <input type="text" class="form-control" name="link" id="link" value="{{ $resource->link }}">
            </div>
            <br><br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>


@endsection