@extends('layouts.main')

@section('title', $news->title)

@section('content')

    <div class="container">
        <div class="card mb-3">
            <h3 class="card-title">{{ $news->created_at }} - {{ $news->title }}</h3>
            <img src="{{ asset($news->image) }}" class="img-thumbnail max-width: 50%  height: auto" alt="..." >
            <div class="card-body">
                <p class="fs-2">{{ $news->text }}</p>
                <p class="fs-3"><small class="text-muted">Колличество просмотров: {{ $news->views }}</small></p>
            </div>
        </div>
    </div>

@endsection
