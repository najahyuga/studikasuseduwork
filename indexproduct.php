<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <title>Index - Product</title>
</head>
<body>
    <div class="container-fluid p-4 bg-warning">
        <h5 style="text-align: center;">Data Product</h5>
    </div><center>
    
    <a href="tambahp.php" class="btn btn-dark">Add Data</a>
    <a href="index.php" class="btn btn-dark">Back to Index</a>

    <table id="example" class="display" style="width:100%">
        <?php
            if (isset($_SESSION['success']) && $_SESSION['success'] !='') {
                echo '<h2 class = "bg-danger text-white"' . $_SESSION['success'] . '</h2>';
                unset($_SESSION['success']);
            }

            if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
                echo '<h2 class = "bg-danger text-white"' . $_SESSION['status'] . '</h2>';
                unset($_SESSION['status']);
            }
        ?>
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Name Product</th>
                <th>Price Product</th>
                <th>Qty Product</th>
                <th>Image</th>
                <th>Id Category</th>
                <th>Id Brand</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                require_once "config.php";
                $data = mysqli_query($host, "SELECT * FROM `product`");
                if (mysqli_num_rows($data)>0) {
                    $no = 1;
                    while ($d = mysqli_fetch_array($data)){
            ?>

                <tr>
                    <td> <?php echo $no ?></td>
                    <td> <?php echo $d["id_product"]; ?> </td>
                    <td> <?php echo $d["name_product"]; ?> </td>
                    <td> <?php echo $d["price_product"]; ?> </td>
                    <td> <?php echo $d["qty_product"] . " Pcs"; ?> </td>
                    <td> <img src="image/<?php echo $d["image"]; ?>" width="80" height="80" alt="image"></td>
                    <td> <?php echo $d["id_category"]; ?> </td>
                    <td> <?php echo $d["id_brand"]; ?> </td>
				    <td>
                        <a href="editp.php?id_product=<?php echo $d['id_product'];?>" class="btn btn-warning"?>Edit</a> <br><br>
				        <a href="hapusp.php?id_product=<?php echo $d['id_product'];?>" class="btn btn-danger"?>Hapus</a>
                    </td>
                </tr>

            <?php $no++; } } ?>
        </tbody>
    </table>
</body>
</html>