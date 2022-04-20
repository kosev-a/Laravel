@extends('layouts.admin')
@section('title') Список ресурсов @endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список ресурсов</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.resources.create') }}" class="btn btn-sm btn-outline-secondary">Добавить ресурс</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <table class="table table-bordered">
            <thead>
              <tr>
                  <th>#ID</th>
                  <th>Ссылка</th>
              </tr>
            </thead>
            <tbody>
              @forelse($resources as $resource)
                  <tr>
                      <td>{{ $resource->id }}</td>
                      <td>{{ $resource->link }}</td>
                      <td>
                          <a href="{{ route('admin.resources.edit', ['resource' => $resource->id]) }}">Ред.</a>
                          &nbsp;
                          <a href="javascript:;" style="color:red;">Удл.</a>
                      </td>
                  </tr>
              @empty
                  <tr><td colspan="4">Записей нет</td></tr>
              @endforelse
            </tbody>
        </table>

        {{ $resources->links() }}
    </div>
@endsection

@push('js')
    <script>//alert("Welcome")</script>
@endpush