@extends('layouts.main')

@section('title', $title)

@section('content')

<div class="container">

<h1>Сайт новостей</h1>

    <div class="container">
        <hr class="border border-primary border-3 opacity-75 rounded">
    </div>

    @if(isset($news))

            @foreach($news as $item)
                <div class="card mb-2">
                    <div class="card-header bg-success bg-opacity-50">
                        <h3 class="card-title">{{ $item->created_at }} - {{ $item->title }}</h3>
                    </div>
                    <div class="card-body bg-success bg-opacity-10">

                        <p class="card-text">{{ $item->preview }}</p>
                        <p class="card-text">Просмотры: {{ $item->views }}</p>
                        <a href="{{ route('news_showOne', ['id' => $item->id]) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>

            @endforeach

        {{ $news->links() }}

    @else

        <p>Новостей нет</p>

    @endif

</div>


@endsection
