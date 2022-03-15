<!-- подключение БД-->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/css.css">
    <title>Добавление артикула</title>
</head>
<body>
<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="test.php">Реестр изменений</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="test.php">Статус</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list.php">Список артикулов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="addpage.php">Добавить новый артикул</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Артикул" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
        </div>
    </div>
</nav>

<!-- Поле ввода артикула-->
<div class="mb-3">
    <br>
    <form action="/action/add_component.php" method="post" type="text" class="form-control" id="form_add"
          placeholder="Введите артикул SAP">
        <label for="exampleFormControlInput1" class="form-label">Текущий артикул</label>
        <input type="text" name="old_component_n" id="old_component_n" placeholder="Выберете артикул SAP"
               class="form-control">
        <label for="exampleFormControlInput1" class="form-label">Новый артикул</label>
        <input type="text" name="old_component_n" id="old_component_n" placeholder="Введите артикул SAP"
               class="form-control">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            Взаимозаменяемый
        </label>
        <br>
        <br>
        <label for="exampleFormControlInput1" class="form-label">Тип материала</label>
        <input type="text" name="old_component_n" id="old_component_n" placeholder="Защитная пленка"
               class="form-control">
        <br>
        <!-- Выбор производственной линии-->
        <div class="container_1">
            <div class="row justify-content-start">
                <div class="col-2">
                    <div class="mb-3" id="addpage">
                        <label for="exampleFormControlInput1" class="form-label">Нижний Новгород</label>
                        <!-- Код выбора производственной линии-->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                NP1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                NP3
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                NT2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                NT3
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                NU01
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                NU02
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                NTA
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="container-fluid">
                        <label for="exampleFormControlInput1" class="form-label">Елабуга</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                JBP1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                JBP2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                JBD1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                JBD2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                JBD3
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                JAD1
                            </label>
                            <br>
                            <button type="button" class="btn btn-primary btn-sm">Выбрать все</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3" id="addpage">
                <form>
                    <label for="inputDate">Дата письма</label>
                    <br>
                    <input type="date" class="form-control-date-addpage" width="20%">
                </form>
            </div>
            <div class="row justify-content-start">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Фото ярлыка сырья</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" id="add" type="submit"> Добавить</button>
            </div>
        </div>
</body>
