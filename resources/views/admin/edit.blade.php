@extends('layouts.admin')

@section('title', $title)

@section('content')

<div class="container" >

    <form class="row g-3" action="{{ route('news.update', ['news' => $news]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Заголовок</label>
            <input name="title" type="text"  class="form-control" id="inputEmail4" value="{{ $news->title }}">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Анонс</label>
            <textarea name="preview" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $news->preview }}</textarea>
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Текст новости</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $news->text }}</textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Добавить изображение</label>
            <input name="image" class="form-control" type="file" id="formFile">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input name="delete" class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Удалить картинку
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>

</div>

@endsection
