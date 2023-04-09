<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>


<div class="container mt-3">
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">Разлогин</button>
    </form>
</div>

<div class="container mt-3">
    <a class="btn btn-primary" href="{{ route('news_showAll') }}" role="button">На страницу новостей</a>
</div>

@include('news.header')

@yield('content')


</body>
</html>
