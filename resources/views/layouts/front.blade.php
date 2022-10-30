<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Insyte Ufa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/flickity.css">
    @vite('resources/css/front.css')
</head>
<body>
    <div id="front">
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="header-logo">
                            <a href="/">
                                <img src="/img/logo.svg" alt="Insyte Ufa">
                            </a>
                        </div>
                        <div class="header-address">
                            г. Уфа, ул. Комсомольская, 94/1
                        </div>
                        <div class="header-tel">
                            <a href="tel:+79378625353">+7 937 862 53 53</a>
                        </div>
                        <div class="header-button">
                            <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn btn-standard">Обратный звонок</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col header-bottom-menu">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
                                <div class="navbar-collapse justify-content-md-center collapse" id="navbarsExample10" style="">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Возможности</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Комплекты умного дома</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Выполненные объекты</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Ответы на вопросы</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">О компании</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Контакты</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <footer>
            <div class="container">
                <p>© Все права защищены</p>
                <p>INSYTE UFA, 2022</p>
                <a href="/policy">Политика конфиденциальности</a>
            </div>
        </footer>

        <div class="modal fade" id="leadModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Оставить заявку</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <create-lead></create-lead>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/flickity.pkgd.min.js"></script>
    @vite('resources/js/front.js')
</body>
</html>