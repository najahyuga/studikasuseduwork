<?php
include_once("config.php");

    $id_brand = $_GET['id_brand'];
    $name_brand = $_POST['name_brand'];
        
	$query = "UPDATE `brand` SET `name_brand`='$name_brand' WHERE `id_brand`='$id_brand'";

	$sql = mysqli_query($host, $query);
    
	if($sql){ 
		header("Location: indexbrand.php");
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='editb.php'>Kembali Ke Form</a>";
	}
	
	header("Location:indexbrand.php");
