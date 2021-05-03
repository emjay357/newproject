<?php
	include('../config.php');
	$producttypename=$_POST['producttypename'];
	$status=$_POST['status'];
	$producttype=$_POST['producttype'];
	$sql_producttype="select MAX(idloaisp) as number from loaisp";
	$execute=mysqli_query($conn, $sql_producttype);
	$numberoftype=mysqli_fetch_array($execute);
	$productidtype=$numberoftype['number']+1;
	
	if(isset($_POST['them'])){
	$sql_exist="select count(*) as number from loaisp where loaisp='$producttype'";
	$exec1=mysqli_query($conn, $sql_exist);
	$number=mysqli_fetch_array($exec1);
	$sql_exist2="select count(*) as number from loaisp where tenloaisp='$producttypename'";
	$exec2=mysqli_query($conn, $sql_exist2);
	$number2=mysqli_fetch_array($exec2);
		if($number['number']>0 || $number2['number']>0){
			echo '<script type="text/javascript">alert("product type is already exist");</script>';
		}else{
		$sql_add="insert into loaisp (idloaisp,loaisp,tenloaisp,tinhtrang) value('$productidtype','$producttype','$producttypename','$status')";
		mysqli_query($conn, $sql_add);
		header('location:../../shoppage.php?quanly=loaisp&ac=lietke');
		}
	}else if(isset($_POST['sua'])){
		$sql_fix = "update loaisp set loaisp='$producttype',tenloaisp='$producttypename',tinhtrang='$status' where idloaisp='$_GET[id]'";
		mysqli_query($conn, $sql_fix);
		header('location:../../shoppage.php?quanly=loaisp&ac=lietke');
	}else{
		$sql_delete = "delete from loaisp where idloaisp = $_GET[id]";
		mysqli_query($conn, $sql_delete);
		header('location:../../shoppage.php?quanly=loaisp&ac=lietke');
	}
?>
