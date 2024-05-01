<?php
require "../../db/connect.php";

$cat_name = $_POST['cat_name'];
$cat_text = $_POST['cat_text'];

$sqlcheck = "SELECT * FROM `catgory` WHERE cat_name = '" . $cat_name . "'";

$querycheck = mysqli_query($conn, $sqlcheck);

$row = mysqli_num_rows($querycheck);

if ($row > 0) {
    echo 400;
} else {
    $sql = "INSERT INTO `catgory`(`cat_name`, `cat_text`) VALUES ('" . $cat_name . "','" . $cat_text . "')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo 200;
    } else {
        echo 500;
    }
}

?>