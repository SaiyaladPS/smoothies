<?php
require "../../db/connect.php";

$deleteId = $_POST['deleteId'];

$sql = "DELETE FROM `product` WHERE id = '" . $deleteId . "'";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo 200;
} else {
    echo 500;
}

?>