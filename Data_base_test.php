
<!DOCTYPE html>
<html>
<head>
<title>База данных</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Список ГП:</h2>
<?php
$conn = new mysqli("localhost", "root", "root", "webapp");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM code_information";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>work_center</th><th>material</th><th>material_description</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["work_center"] . "</td>";
            echo "<td>" . $row["material"] . "</td>";
            echo "<td>" . $row["material_description"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>