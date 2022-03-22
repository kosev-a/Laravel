@extends('layouts.main')

@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Главная страница агрегатора новостей</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="row py-lg-5 mx-auto">
        <div class='welcome' style="text-align: center;">
            <h1>
                {{ $welcome }}
            </h1>
            <br>
        </div>
    <div>
@endsection

