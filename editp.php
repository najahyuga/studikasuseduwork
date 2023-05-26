<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit - Product</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>	
    <link rel="stylesheet" href="assets/stylee.css">
    <script src="assets/script.js"></script>
</head>
<body>

    <div class="container mt-5">

        <?php
                include_once "config.php";
                $id_product = $_GET["id_product"];
                $query = mysqli_query($host, "SELECT * FROM product WHERE id_product='$id_product'");

                foreach ($query as $row) {
        ?>

        <form action="proseseditp.php?id_product=<?php echo $id_product ?>" method="post" id="form-validation" enctype="multipart/form-data">
            
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
            <div class="input-group mb-3 input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text">Id Product&emsp;&emsp;&emsp;</span>
                </div>
                <input type="text" name="id_product" class="form-control" value="<?php echo $row['id_product']; ?>" disabled>
            </div>

            <div class="input-group mb-3 input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text">Name Product &emsp;</span>
                </div>
                <input type="text" name="name_product" class="form-control" value="<?php echo $row['name_product']; ?>">
            </div>

            <div class="input-group mb-3 input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text">Price Product &emsp;</span>
                </div>
                <input type="number" name="price_product" class="form-control" value="<?php echo $row['price_product']; ?>">
            </div>

            <div class="input-group mb-3 input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text">Qty Product &emsp;</span>
                </div>
                <input type="number" name="qty_product" class="form-control" value="<?php echo $row['qty_product']; ?>">
            </div>

            <div class="input-group mb-3 input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text">Image Product &emsp;</span>
                </div>
                <input type="file" name="image" id="image" class="form-control" value="<?php echo $row['image']; ?>">
            </div>
            
            <?php 
                require_once "config.php";
                $data = mysqli_query($host, "SELECT * FROM `category`");
                if (mysqli_num_rows($data) > 0) {
            ?>
                    <div class="input-group mb-3 input-group-lg">
                        <div class="input-group-prepend">
                            <!-- <label for="">Id Category</label> -->
                            <span class="input-group-text">Id Category &emsp;</span>
                            <select name="id_category" id="" class="form-control">
                                <option value="">Choose Your Id Category</option>
                                <?php 
                                    foreach ($data as $row) {
                                ?>
                                    <option value="<?php echo $row['id_category']; ?>"><?php echo $row['name_category']; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
            <?php 
                } else {
                    echo "No Data Avalaible";
                }
            ?>

            <?php 
                require_once "config.php";
                $data = mysqli_query($host, "SELECT * FROM `brand`");
                if (mysqli_num_rows($data) > 0) {
            ?>
                    <div class="input-group mb-3 input-group-lg">
                        <div class="input-group-prepend">
                            <!-- <label for="">Id Category</label> -->
                            <span class="input-group-text">Id Brand &emsp;</span>
                            <select name="id_brand" id="" class="form-control">
                                <option value="">Choose Your Id Brand</option>
                                <?php 
                                    foreach ($data as $row) {
                                ?>
                                    <option value="<?php echo $row['id_brand']; ?>"><?php echo $row['name_brand']; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
            <?php 
                } else {
                    echo "No Data Avalaible";
                }
            ?>
        
            <button type="submit" name ="submit" value="submit" button type ="button" class="btn btn-primary">SIMPAN</button>
            <a href="indexproduct.php" class="btn btn-dark">Back to Home</a>
        </form>

        <?php
            }
        ?>

    </div>
</body>
</html>
