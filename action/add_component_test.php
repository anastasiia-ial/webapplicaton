<?php
$old_component = $_POST ['old_component_name'];
if ($old_component == '') {
    echo 'Не введен старый артикул';
    exit();
}
$dsn = 'mysql:host=localhost; dbname=webapp';
$pdo = new PDO($dsn, "root", "root");
$sql = 'INSERT INTO test(old_component) VALUES (:old_component)';
$query = $pdo->prepare($sql);
$query->execute([':old_component' => $old_component]);

header('location:/');

?>