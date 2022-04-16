@extends('layouts.main');
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список категорий</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Кол-во новостей</th>
                    <th>Заголовок</th>
                    <th>Описание</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->news_count }}</td>
                        <td><a href="{{ route('categories.show', ['categories' => $category->id]) }}">{{ $category->title }}</a></td>
                        <td>{{ $category->description }}</td>
                    </tr>
                @empty
                    <tr><td colspan="4">Записей нет</td></tr>
                @endforelse
            </tbody>
        </table>

        {{ $categories->links() }}
    </div>
@endsection

@push('js')
    <script>//alert("Welcome")</script>
@endpush
