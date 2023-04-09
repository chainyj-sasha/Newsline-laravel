@extends('layouts.admin')

@section('title', $title)

@section('content')

<div class="container">

    <form class="row g-3" action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Заголовок</label>
            <input name="title" type="text"  class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Анонс</label>
            <textarea name="preview" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Текст новости</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Добавить изображение</label>
            <input name="image" class="form-control" type="file" id="formFile">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>

</div>

@endsection
