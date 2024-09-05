<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редакционно-издательский центр</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container my-3">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <img src="img/logo_new.png" class="logotip"/>
                    <p class="m-3">Редакционно-издательский центр</p>
                </div>
                <a class="text-dark text-decoration-none">г. Чебоксары, Карла Маркса, 38, кабинет 205А</a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light py-3" style="background-color: rgba(194, 30, 65, 1);">
            <div class="container">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav" id="navbarSupportedContent">
                        <li class="nav-item">
                            <a href="catalog.html" class="nav-link active text-white fw-bold text-uppercase size-font">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white fw-bold text-uppercase size-font">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white fw-bold text-uppercase size-font">Контакты</a>
                        </li>
                    </ul>
                    <div class="ms-auto">
                        <ul class="navbar-nav" id="navbarSupportedContent">
                            <li class="nav-item">
                                <a href="" class="nav-link active text-white fw-bold text-uppercase size-font">Авторизоваться</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link active text-white fw-bold text-uppercase size-font">Корзина</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="mt-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Главная</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Каталог</li>
                </ol>
            </nav>
            <div class="card" style="width: 100%; border: none; margin: 0;">
                <div class="card-body">
                    <h3 class="card-title">Блокнот</h3>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="white-box text-center"><img src="img/people_3_notepad_front_white_500.jpg" class="d-block w-100"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6">
                            <h4 class="box-title mt-2">Описание продукта</h4>
                            <p>Товар товар товар</p>
                            <h2 class="mt-5">
                                150 рублей
                            </h2>
                            <button class="btn btn-red btn-rounded">Добавить в корзину</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <a href="yandex.com">[dd</a>
    </footer>
    <script src="js/bootstrap.min.js"></script>
</body>