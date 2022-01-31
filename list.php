<!-- start-->
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
                    <a class="nav-link active" href="list.php">Список артикулов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addpage.php">Добавить новый артикул</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Артикул" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
        </div>
    </div>
</nav>
<!--базы данных--->

<div class="container">
    <h2>Список артикулов готовой продукции</h2>

    <table class="table table-bordered">
        <thead>
        <tr>
            <td>B0101543</td>
            <td>BD MT NANI PREM MAXI 54PCS</td>
            <td >
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="todo.php" type="button" class="btn btn-primary" >Перейти</a>
                </div>
            </td>
        </tr>
        <tr>
            <td>B0101543</td>
            <td>BD MT NANI PREM JUNIOR 44PCS</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" type="button" class="btn btn-primary" >Перейти</a>
                </div>
            </td>
        </tr>
        <tr>
            <td>B0101544</td>
            <td>BD MT NANI PREM XL 38PCS</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" type="button" class="btn btn-primary" >Перейти</a>
                </div>
            </td>
        </tr>
        </thead>
    </table>
</div>
</body>
