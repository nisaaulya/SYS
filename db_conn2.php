<?php 
session_start(); 

$koneksi=mysqli_connect("localhost","root","","websiteku");

if (mysqli_connect_errno()){ // cek kondisi jika koneksi berhasil
echo "Koneksi database gagal : " . mysqli_connect_error();}

	$ProductID = $_POST['ProductID'];
	$ProductName = $_POST['ProductName'];
	$ProductPrice= $_POST['ProductPrice'];
	$ProductImage= $_POST['ProductImage'];

	$save=mysqli_query($koneksi, "insert into Products (ProductID, ProductName, ProductPrice, ProductImage) values ('$ProductID','$ProductName','$ProductPrice','$ProductImage')");
	if($save){
		echo "";
	}
?>


