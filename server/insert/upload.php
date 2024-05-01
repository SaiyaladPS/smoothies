<?php
require "../../db/connect.php";
if (isset($_FILES['imageInput'])) {

    $targetDir = "../../assets/upload/"; // Replace with your upload directory
    $fileName = basename($_FILES['imageInput']['name']);
    $targetFilePath = $targetDir . $fileName;

    // Optional: File type validation
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $allowedExtensions = ["jpg", "jpeg", "png"];

    $sqlcheck = "SELECT * FROM product WHERE pro_id = '" . $_POST['pro_id'] . "'";

    $querycheck = mysqli_query($conn, $sqlcheck);

    $rowcheck = mysqli_num_rows($querycheck);

    if ($rowcheck > 0) {
        echo 500;
    } else {
        // Upload the file
        if (move_uploaded_file($_FILES['imageInput']['tmp_name'], $targetFilePath)) {

            $uploadedFileName = $fileName;
            $pro_id = $_POST['pro_id'];
            $pro_name = $_POST['pro_name'];
            $cat_id = $_POST['cat_id'];
            $pro_bpric = $_POST['pro_bpric'];

            // Prepare SQL statement (prevents SQL injection)
            $sql = "INSERT INTO `product`(`pro_id`,`imageInput`, `pro_name`, `cat_id`, `pro_bpric`) VALUES ('" . $pro_id . "', '" . $uploadedFileName . "', '" . $pro_name . "', '" . $cat_id . "', '" . $pro_bpric . "')";
            $query = mysqli_query($conn, $sql);

            if ($query) {
                echo 200;
            } else {
                echo 500;
            }
        }
    }
}
?>