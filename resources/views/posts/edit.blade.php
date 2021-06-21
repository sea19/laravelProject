@extends('layouts.app')

@section('title', 'Редактировать запись '.$post->title)

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('posts.update', $post) }}">
                @method('PATCH')
                @csrf
                    <div class="mb-3">
                        <label for="post-title" class="form-label">Название</label>
                        <input type="text" name="title" class="form-control" id="post-title" value="{{ $post->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="post-description" class="form-label">Описание</label>
                        <textarea name="description" class="form-control" id="post-description">{{ $post->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Отредактировать</button>
            </form>
        </div>
    </div>
@endsection
