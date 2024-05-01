<?php
require "../../db/connect.php";
if (isset($_FILES['imageInput'])) {

    $targetDir = "../../assets/upload/"; // Replace with your upload directory
    $fileName = basename($_FILES['imageInput']['name']);
    $targetFilePath = $targetDir . $fileName;

    // Optional: File type validation
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $allowedExtensions = ["jpg", "jpeg", "png"];

    // Upload the file
    if (move_uploaded_file($_FILES['imageInput']['tmp_name'], $targetFilePath)) {

        $uploadedFileName = $fileName;
        $id = $_POST['id'];

        // Prepare SQL statement (prevents SQL injection)
        $sql = "UPDATE `product` SET `imageInput`='" . $uploadedFileName . "' WHERE `id`='" . $id . "'";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo 200;
        } else {
            echo 500;
        }
    }
}
?>