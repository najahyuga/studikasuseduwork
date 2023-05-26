<?php
include_once("config.php");

if (isset($_POST['submit'])) {
    $id_product = $_GET['id_product'];
    $name_product = $_POST["name_product"];
    $price_product = $_POST["price_product"];
    $qty_product = $_POST["qty_product"];
    $image = $_FILES["image"]["name"];
    $id_category = $_POST["id_category"];
    $id_brand = $_POST["id_brand"];

    $querydata = mysqli_query($host, "SELECT * FROM `product` WHERE `id_product` = '$id_product'");
    foreach ($querydata as $drow) {
        if ($image == null) {
            $imageData = $drow['image'];
        } else {
            if ($imgPath = "image/" . $drow['image']) {
                # code...
                unlink($imgPath);
                $imageData = $image;
            }
        }
    }

    $query = mysqli_query($host, "UPDATE `product` SET `name_product` = '$name_product', `price_product` = '$price_product', `qty_product` = '$qty_product', `image` = '$imageData', `id_category` = '$id_category', `id_brand` = '$id_brand' WHERE `id_product`='$id_product'");

    if ($query) {
        if ($image == null) {
            $_SESSION['success'] = "Data Added";
            header("Location: indexproduct.php");
        } else {
            move_uploaded_file($_FILES["image"]["tmp_name"], "image/" . $_FILES["image"]["name"]);
            $_SESSION['success'] = "Data Added";
            header("Location: indexproduct.php");
        }
    } else {
        $_SESSION['status'] = "Data Is Not Added";
        header("Location: indexproduct.php");
    }
}