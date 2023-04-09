@extends('layouts.admin')

@section('title', $title)

@section('content')

<div class="container">

    <h1 class="d-flex justify-content-center">Страница администратора</h1>

    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="{{ route('news.create') }}" class="btn btn-primary mb-4 btn-success">Создать новость</a>
    </div>

    @foreach($news as $item)

        <div class="card mb-2 bg-primary-subtle">
            <div class="card-header bg-info">
                <h3 class="card-title">{{ $item->title }}</h3>
            </div>
            <div class="card-body bg-info bg-opacity-10">
                <p class="card-text">{{ $item->preview }}</p>
                <p class="card-text">Просмотры: {{ $item->views }}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('news.edit', ['news' => $item]) }}" class="btn btn-primary">редактировать</a>

                <form action="{{ route('news.destroy', ['news' => $item]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" id="btn" type="submit" value="Удалить">
                </form>
                </div>
            </div>
        </div>

    @endforeach

    {{ $news->links() }}

</div>

@endsection
