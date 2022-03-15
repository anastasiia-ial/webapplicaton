<!doctype html>
<html LANG="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>WEB APPLICATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="mb-3">
    <form action="/action/add_component_test.php" method="post" class="form-control">

        <label for="old_component" class="form-label">Текущий артикул</label>
        <input type="text"
               name="old_component_name"
               id="old_component"
               placeholder="Введите артикул SAP"
        <input type="text" name="old_component_name" id="old_component" placeholder="Введите артикул SAP"
               class="form-control">
        <br>
        <button type="submit" name="sendApplication" class="btn btn-success"> Отправить</button>

        <?php
        require 'db.php';
        echo '<ul>';
        $query = $pdo->query('SELECT * FROM `test`');
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<li><b>' . $row->old_component . '</b><a href="delete.php?id='.$row->id.'"> <button type="button" class="btn btn-secondary btn-sm">Удалить</button></a></li>';
        }
        echo '</ul>';
        ?>
</div>
</body>
</html>
