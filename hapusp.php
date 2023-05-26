<?php
include_once "config.php";

$id_product = $_GET['id_product'];

$query = "SELECT * FROM product WHERE id_product = '" . $id_product. "' ";
$sql = mysqli_query($host, $query);
$data = mysqli_fetch_array($sql);


$query2 = "DELETE FROM product WHERE id_product ='".$id_product."' ";
$sql2 = mysqli_query($host, $query2); 

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	
	// Jika Sukses, Lakukan :
	header("location: indexproduct.php"); // Redirect ke halaman index1.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='indexproduct.php'>Kembali</a>";
}
?>
