@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="mb-4">{{ $post->title }}</h3>
            <p>{{ $post->description }}</p>
        </div>
    </div>
@endsection
