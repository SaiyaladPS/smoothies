<?php
require "../../db/connect.php";
$pro_id = $_POST['pro_id'];
$pro_name = $_POST['pro_name'];
$cat_id = $_POST['cat_id'];
$pro_bpric = $_POST['pro_bpric'];
$id = $_POST['id'];


$sql = "UPDATE `product` SET `pro_id`='" . $pro_id . "',`pro_name`='" . $pro_name . "',`cat_id`='" . $cat_id . "',`pro_bpric`='" . $pro_bpric . "' WHERE `id`='" . $id . "'";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo 200;
} else {
    echo 500;
}

?>