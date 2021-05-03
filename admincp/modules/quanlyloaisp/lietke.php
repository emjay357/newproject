<?php
if(isset($_GET['trang'])){
  $trang=$_GET['trang'];
}else{
  $trang='';
}
if($trang =='' || $trang =='1'){
  $trang1=0;
}else{
  $trang1=($trang*5)-5;
}
	$sql_producttypelist="select * from loaisp order by idloaisp asc limit $trang1,5 ";
	$row_producttypelist=mysqli_query($conn, $sql_producttypelist);

?>
<div class="button_themsp">
<a href="shoppage.php?quanly=loaisp&ac=them">Add type</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Product type</td>
    <td>Status</td>
    <td colspan="2">Manage</td>
  </tr>
  <?php
  while($dong=mysqli_fetch_array($row_producttypelist)){

  ?>
  <tr>
    <td><?php  echo $dong['idloaisp']?></td>
    <td><?php echo $dong['tenloaisp'] ?></td>
    <td><?php
	if($dong['tinhtrang'] == 1 ){
		echo 'Available';
	}else{
		echo 'Unavailable';
	}
    ?></td>
    <td><a href="shoppage.php?quanly=loaisp&ac=sua&id=<?php echo $dong['idloaisp'] ?>"><center><img src="../imgs/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['idloaisp']?>" class="delete_link"><center><img src="../imgs/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  }
  ?>
</table>
<div class="trang">
	Trang :
    <?php
	$sql_trang=mysqli_query($conn, "select * from loaisp");
	$count_trang=mysqli_num_rows($sql_trang);
	$a=ceil($count_trang/5);
	for($b=1;$b<=$a;$b++){
		
		if($trang==$b){
		
		echo '<a href="shoppage.php?quanly=loaisp&ac=lietke&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="shoppage.php?quanly=loaisp&ac=lietke&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</div>