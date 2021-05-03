<?php
	include('../config.php');
	$producer=$_POST['producer'];
	$status=$_POST['status'];
	$sql_producer="select MAX(idhieusp) as number from hieusp";
	$execute=mysqli_query($conn, $sql_producer);
	$numberofproducer=mysqli_fetch_array($execute);
	$producerid=$numberofproducer['number']+1;
	if(isset($_POST['them'])){
	$sql_exist="select count(*) as number from hieusp where tenhieusp='$producer'";
	$execute=mysqli_query($conn, $sql_exist);
	$number=mysqli_fetch_array($execute);
		if($number['number']>0){
			echo '<script type="text/javascript">alert("producer already exist");</script>';
		}else{
		$sql_add=("insert into hieusp (idhieusp,tenhieusp,tinhtrang) value('$producerid','$producer','$status')");
		mysqli_query($conn, $sql_add);
		header('location:../../shoppage.php?quanly=hieusp&ac=lietke');
		}
	}else if(isset($_POST['sua'])){
		$sql_exist="select count(*) as number from hieusp where tenhieusp='$producer'";
		$number=mysqli_query($conn, $sql_exist);
			if($number['number']>0){
				echo '<script type="text/javascript">alert("producer already exist");</script>';
			}else{
		$sql_fix = "update hieusp set tenhieusp='$producer',tinhtrang='$status' where idhieusp='$_GET[id]'";
		mysqli_query($conn, $sql_fix);
		header('location:../../shoppage.php?quanly=hieusp&ac=lietke');
			}
	}else{
		$sql_delete = "delete from hieusp where idhieusp = $_GET[id]";
		mysqli_query($conn, $sql_delete);
		header('location:../../shoppage.php?quanly=hieusp&ac=lietke');
	}
?>
