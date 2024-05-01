<?php
require "../../db/connect.php";
$selectId = $_POST['selectId'];
$sql = "SELECT * FROM product AS pro INNER JOIN catgory AS cat ON pro.cat_id = cat.cat_id WHERE pro.id = '" . $selectId . "'";
$query = mysqli_query($conn, $sql);

$rows = mysqli_fetch_assoc($query);

echo json_encode($rows);
?>