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
   @yield('main_content')
</div>

<div class="container">
    <div class="p-4 p-md-5 mb-4 text-white border rounded bg-dark ">
        <div class="col p-4 d-flex flex-column position-static">

            <h1 class="display-4 fst-italic">Valve представила портативный игровой ПК Steam Deck</h1>
            <p class="lead my-3">В странах «первой волны» он поступит в продажу в декабре 2021-го.</p>
            <p class="lead mb-0"><a href="/post" class="text-white fw-bold">Подробнее...</a></p>
        </div>
    </div>


    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Кино</strong>
                    <h3 class="mb-0">Самый дорогой артхаус в истории: как создавался «Бегущий по лезвию 2049»</h3>
                    <div class="mb-1 text-muted">15.07</div>
                    <p class="card-text mb-auto">Подробный рассказ о съёмках одного из важнейших научно-фантастических фильмов последних лет.</p>
                    <a href="#" class="stretched-link">Подробнее</a>
                </div>
                <div class="col-auto d-none d-lg-block">


                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Музыка</strong>
                    <h3 class="mb-0">Маэстро тумана: как Акира Ямаока стал одним из величайших игровых композиторов</h3>
                    <div class="mb-1 text-muted">20.07</div>
                    <p class="mb-auto">От жизни гитариста-самоучки до концертов с музыкой из Silent Hill.</p>
                    <a href="#" class="stretched-link">Подробнее</a>
                </div>
                <div class="col-auto d-none d-lg-block">


                </div>
            </div>
        </div>
    </div>



</main>

</body>
</html>
