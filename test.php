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
    <title>Внесение изменений</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

</script>
<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="main.php">Реестр изменений</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="test.php">Статус</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list.php">Список артикулов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addpage.php">Добавить новый артикул сырья</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Артикул" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
        </div>
    </div>
</nav>

<!-- cards status -->
<table class="table">

    <tbody>
    <tr>
        <th scope="row">
            <div class="card">
                <h5 class="card-header">RF020117/RF020118</h5>
                <div class="card-body">
                    <h5 class="card-title">Защитная пленка</h5>
                    <p class="card-text">Линия NU1 NU2</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35"
                             aria-valuemin="0" aria-valuemax="100">35%
                        </div>
                    </div>
                    <a href="Find.php" class="btn btn-primary">Перейти к списку ГП</a>
                </div>
            </div>
        </th>
        <td>
            <div class="card">
                <h5 class="card-header">RN030036/RN030045</h5>
                <div class="card-body">
                    <h5 class="card-title">Нетканый материал</h5>
                    <p class="card-text"> Линия JBD</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 7%;" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100">0%
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Перейти к списку ГП</a>
                </div>
            </div>
        </td>
        <td>
            <div class="card">
                <h5 class="card-header">RN030035/RN030046</h5>
                <div class="card-body">
                    <h5 class="card-title">Нетканый материал</h5>
                    <p class="card-text">Линия JBD</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55"
                             aria-valuemin="0" aria-valuemax="100">55%
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Перейти к списку ГП</a>
                </div>
            </div>
        </td>
        <td>
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">25%
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">25%
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </th>
        <td>
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">25%
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </td>
        <td>
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">25%
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </td>
        <td>
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">25%
                        </div>
                    </div>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
