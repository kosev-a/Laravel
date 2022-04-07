@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Список новостей</h1>
</div>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Категория</th>
                <th>Заголовок</th>
                <th>Описание</th>
                <th>Дата редактирования</th>
            </tr>
        </thead>
        <tbody>
            @forelse($newsList as $news)
            <tr>
                <td>{{ $news->category->title }}</td>
                <td><a href="{{ route('news.show', ['news' => $news]) }}">{{ $news->title }}</a></td>
                <td>{{ $news->description }}</td>
                <td>@if($news->updated_at) {{ $news->updated_at->format('d-m-Y H:i') }} @endif </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">Записей нет</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $newsList->links() }}
</div>
@endsection