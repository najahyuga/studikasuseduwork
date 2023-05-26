<?php
require_once "config.php";
if (isset($_POST['submit'])) {
    $name_product = $_POST["name_product"];
    $price_product = $_POST["price_product"];
    $qty_product = $_POST["qty_product"];
    $image = $_FILES["image"]["name"];
    $id_category = $_POST["id_category"];
    $id_brand = $_POST["id_brand"];

    if (file_exists("image/" . $_FILES["image"]["name"])) {
        $img = $_FILES["image"]["name"];
        $_SESSION['status'] = "Image Already Exists. '. $img .'";
        header("Location: indexproduct.php");
    } else {
        $query = mysqli_query($host, "INSERT INTO `product`(`name_product`, `price_product`, `qty_product`, `image`, `id_category`, id_brand) VALUES ('$name_product','$price_product','$qty_product','$image','$id_category','$id_brand')");
        
        if ($query) {
            move_uploaded_file($_FILES["image"]["tmp_name"], "image/" . $_FILES["image"]["name"]);
            $_SESSION['success'] = "Data Added";
            header("Location: indexproduct.php");
        }else{
            $_SESSION['status'] = "Data Is Not Added";
            header("Location: indexproduct.php");
        }
    }
} 
header("location: indexproduct.php " );