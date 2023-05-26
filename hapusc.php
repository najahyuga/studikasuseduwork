<?php
include_once "config.php";

$id_category = $_GET['id_category'];

$query = "SELECT * FROM category WHERE id_category = '" . $id_category. "' ";
$sql = mysqli_query($host, $query);
$data = mysqli_fetch_array($sql);


$query2 = "DELETE FROM category WHERE id_category ='".$id_category."' ";
$sql2 = mysqli_query($host, $query2); 

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	
	// Jika Sukses, Lakukan :
	header("location: indexcategory.php"); // Redirect ke halaman index1.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='indexcategory.php'>Kembali</a>";
}
?>
