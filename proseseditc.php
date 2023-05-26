<?php
include_once("config.php");

    $id_category = $_GET['id_category'];
    $name_category = $_POST['name_category'];
        
	$query = "UPDATE `category` SET `name_category`='$name_category' WHERE `id_category`='$id_category'";

	$sql = mysqli_query($host, $query);
    
	if($sql){ 
		header("Location: indexcategory.php");
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='edit.php'>Kembali Ke Form</a>";
	}
	
	header("Location:indexcategory.php");
