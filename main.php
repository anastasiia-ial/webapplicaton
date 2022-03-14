<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Main page</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
                <a href="/main.php"
                   class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="/img/worker.png" class="bi me-2" width="32" height="32">
                    <span class="fs-4">Конструктор v 1.0</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            <img src="/img/page.png" class="bi me-2" width="16" height="16">
                            Создать МК
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <img src="/img/email.png" class="bi me-2" width="16" height="16">
                            Входящие
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <img src="/img/outgoing-email.png" class="bi me-2" width="17" height="17">
                            Исходящие
                        </a>
                    </li>
                    <li>
                        <a href="/test.php" class="nav-link link-dark">
                            <img src="/img/search.png" class="bi me-2" width="16" height="16">
                            Реестр изменений
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <img src="/img/new-document.png" class="bi me-2" width="16" height="16">
                            Номенклатура
                        </a>
                    </li>
                    <li>
                        <h1 class="visually-hidden">Sidebars examples</h1>
                    </li>
                    <li>
                        <h1 class="visually-hidden">Sidebars examples</h1>
                    </li>
                    <li>
                        <h1 class="visually-hidden">Sidebars examples</h1>
                    </li>
                    <li>
                        <h1 class="visually-hidden">Sidebars examples</h1>
                    </li>
                    <li>

                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                       id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/img/builder.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>Anastasiia</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-7">
            <h1>Hello</h1>
        </div>
    </div>
</div>
</body>
</html>
