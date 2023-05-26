<?php
require_once "config.php";
	$name_brand = $_POST['name_brand'];
	$data=mysqli_query($host,"INSERT INTO `brand` (`id_brand`, `name_brand`) 
	VALUES ('', '$name_brand')");

	
header("location: indexbrand.php " ); 
?>