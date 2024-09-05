<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/logo_new.png">
    <title>Редакционно-издательский центр</title>
    @vite(['resources/css/style.css', 'resources/css/bootstrap.min.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="container my-3">
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center">
                <img src="images/logo_new.png" class="logotip"/>
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
                    @auth()
                        <ul class="navbar-nav" id="navbarSupportedContent">
                            <li class="nav-item">
                                <a href="{{ route('user.loginPage') }}" class="nav-link active text-white fw-bold text-uppercase size-font">Личный кабинет</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link active text-white fw-bold text-uppercase size-font">Корзина</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link active text-white fw-bold text-uppercase size-font">Выход</a>
                            </li>
                        </ul>
                    @else
                        <ul class="navbar-nav" id="navbarSupportedContent">
                            <li class="nav-item">
                                <a href="{{ route('user.loginPage') }}" class="nav-link active text-white fw-bold text-uppercase size-font">Авторизоваться</a>
                            </li>
                        </ul>
                    @endauth

                </div>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
