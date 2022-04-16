@extends('layouts.admin')
@section('title') Изменение учетных данных @endsection
@section('content')
    <div class="raw">
        @include('inc.messages')

        @if(Session::has('MSG'))
            <div class="alert alert-success">
                {{ Session::get('MSG') }}
            </div>
        @endif
        <form action="{{ route('admin.profile.update') }}" method="post">
            @csrf

            <input class="form-control" name="name" type="name" placeholder="Имя" value="{{ $user->name }}">
            <br>
            <input class="form-control" name="email" type="email" placeholder="Email" value="{{ $user->email }}">
            <br>
            <input class="form-control" name="password" type="password" placeholder="Пароль" value="{{ $user->password }}">
            <br>
            <input class="form-control" name="newPassword" type="newPassword" placeholder="Новый пароль" value="{{ $user->newPassword }}">
            <br>
            <label for="is_admin">Права пользователя</label>
                <select name="is_admin" id="is_admin" class="form-control">
                    <option value="false" selected>Пользователь</option>
                    <option value="true" selected>Администратор</option>
                </select>
            <button class="form-control" type="submit">
                Изменить
            </button>
    </form>
@endsection