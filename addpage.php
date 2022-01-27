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
        <a class="navbar-brand" href="test">Реестр изменений</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="test">Статус</a>
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
    <label for="exampleFormControlInput1" class="form-label">Текущий артикул</label>
    <input type="text" class="form-control_addpage" id="exampleFormControlInput1" placeholder="Введите артикул SAP">
</div>
<!-- Поле ввода нового артикула-->
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Новый артикул</label>
    <input type="text" class="form-control_addpage" id="exampleFormControlInput1" placeholder="Введите артикул SAP">
</div>
<!-- Поле ввода типа материала-->
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Тип материала</label>
    <input type="text" class="form-control_addpage" id="exampleFormControlInput1" placeholder="Защитная пленка">
</div>
<!-- Выбор производственной линии-->
<div class="mb-3" id="addpage">
    <label for="exampleFormControlInput1" class="form-label">Линия</label>
    <!-- Код выбора производственной линии-->
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            NP1
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
            NP3
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
            NT2
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
           NT3
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
            NU
        </label>
    </div>
</div>
  <div class="col-12">
    <button class="btn btn-primary" id="add" type="submit"> Добавить </button>
  </div>
</body>
