@extends('layouts.main')

@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Форма обратной связи</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="raw">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert type="danger" :message="$error"></x-alert>
            @endforeach
        @endif
        <form method="post" action="#">
            @csrf
            <div class="form-group">
                <label for="username">Имя</label>
                <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}">
            </div>
            <div class="form-group">
                <label for="feedback">Отзыв</label>
                <textarea class="form-control" name="feedback" id="feedback">{{ old('feedback') }}</textarea>
            </div>
            <br><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
@endsection
