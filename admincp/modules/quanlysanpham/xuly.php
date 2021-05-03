<?php
	include('../config.php');
	$productname=$_POST['productname'];
	$image=$_POST['image'];
	$price=$_POST['price'];
	$amount=$_POST['amount'];
	$producttype=$_POST['producttype'];
	$producer=$_POST['producer'];
	$status=$_POST['status'];
	$sql_productnumber="select MAX(productid) as number from sanpham";
	$execute=mysqli_query($conn, $sql_productnumber);
	$numberofproduct=mysqli_fetch_array($execute);
	$productid=$numberofproduct['number']+1;
	
	if(isset($_POST['them'])){
		 $sql_add="insert into sanpham (productid,productname,image,price,amount,producttype,producer,status) value('$productid','$productname','$image','$price','$amount','$producttype','$producer','$status')";
		mysqli_query($conn, $sql_add);
		header('location:../../shoppage.php?quanly=sanpham&ac=lietke');
	}else if(isset($_POST['sua'])){
	  $sql_fix = "update sanpham set productname='$productname',image='$image',price='$price',amount='$amount',producttype='$producttype',producer='$producer',status='$status' where productid='$_GET[id]'";
		mysqli_query($conn, $sql_fix);
		header('location:../../shoppage.php?quanly=sanpham&ac=lietke');
	}else{
		$sql_delete = "delete from sanpham where productid = $_GET[id]";
		mysqli_query($conn, $sql_delete);
		header('location:../../shoppage.php?quanly=sanpham&ac=lietke');
	}
?>
