<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="btn btn-sm btn-outline-info" href="/about">Про нас</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-white" href="/home">Главная / TEST NEWS</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
                </a>
                <a class="btn btn-sm btn-outline-warning" href="/review">Предложить новость</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="btn btn-sm btn-outline-light" href="/games">Игры</a>
            <a class="btn btn-sm btn-outline-light" href="/movies">Кино</a>
            <a class="btn btn-sm btn-outline-light" href="/music">Музыка</a>
        </nav>
    </div>


    <h1>Предложить новость</h1>

    @if($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <textarea name="title_name" id="title_name" class="form-control" placeholder="Заголовок"></textarea><br>
        <textarea name="topic" id="topic" class="form-control" placeholder="Тема"></textarea><br>
        <textarea name="text" id="text" class="form-control" placeholder="Текст"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

    <h1>Все новости</h1>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h3>{{ $el->title_name }}</h3>
            <b>{{ $el->topic }}</b>
            <p>{{ $el->text }}</p>
        </div>
    @endforeach

