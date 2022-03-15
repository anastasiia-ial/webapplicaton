<?php
$old_component= $_POST ['old_component_n'];
if ($old_component =='') {
    echo 'Не введен старый артикул';
    exit();
}
require 'db.php';
$sql = 'INSERT INTO test(old_component) VALUES (:old_component)';
$query = $pdo->prepare($sql);
$query->execute([':old_component'=> $old_component]);

header('location:/');

?>