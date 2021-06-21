@extends('layouts.app')

@section('title', 'Все записи')

@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-dark">Создать запись</a>

    @if (session()->get('success'))
        <div class="alert alert-success mt-3">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td class="table-buttons">
                <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-success">Просмотреть</a>
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-primary">Редактировать</a>
                <form method="POST" action="{{ route('posts.destroy', $post) }}">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
