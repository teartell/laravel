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

</div>

<div class="container">
    <div class="p-4 p-md-5 mb-4 text-white border rounded bg-dark ">
        <div class="col p-4 d-flex flex-column position-static">

            <h1 class="display-4 fst-italic">EA анонсировала ремейк первой части Dead Space</h1>
            <p class="lead my-3">Игра выйдет на ПК, PS5 и Xbox Series.</p>
            <p class="lead mb-0"><a href="/post" class="text-white fw-bold">Подробнее...</a></p>
        </div>
    </div>


    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-warning">Игры</strong>
                    <h3 class="mb-0">Обновлённая версия «Ведьмака 3» получит дополнительный контент по сериалу Netflix</h3>
                    <div class="mb-1 text-muted">15.07</div>
                    <p class="card-text mb-auto">Об этом сообщили на фестивале WitcherCon, где также показали переработанную обложку «Дикой охоты».</p>
                    <a href="#" class="stretched-link">Подробнее</a>
                </div>
                <div class="col-auto d-none d-lg-block">


                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-warning">Игры</strong>
                    <h3 class="mb-0">В Genshin Impact добавят Элой из серии Horizon</h3>
                    <div class="mb-1 text-muted">20.07</div>
                    <p class="mb-auto">Сначала пятизвёздочная героиня будет эксклюзивной для консолей PlayStation.</p>
                    <a href="#" class="stretched-link">Подробнее</a>
                </div>
                <div class="col-auto d-none d-lg-block">


                </div>
            </div>
        </div>
    </div>
