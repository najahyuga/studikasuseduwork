<?php
require_once "config.php";
	$name_category = $_POST['name_category'];
	$data=mysqli_query($host,"INSERT INTO `category` (`id_category`, `name_category`) 
	VALUES ('', '$name_category')");

	
header("location: indexcategory.php " ); 
?>