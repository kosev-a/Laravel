@extends('layouts.main');
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Получение выгрузки данных</h1>
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
        <form method="post" action="{{ route('news.create') }}">
            @csrf
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="telephone">Номера телефона</label>
                <input type="tel" class="form-control" name="telephone" id="telephone" value="{{ old('telephone') }}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="info">Информация</label>
                <textarea class="form-control" name="info" id="info">{!! old('info') !!}</textarea>
            </div>
            <br><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>

@endsection
