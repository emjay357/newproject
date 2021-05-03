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
	$sql_lietkesp="select * from hieusp order by idhieusp asc limit $trang1,5 ";
	$row_lietkesp=mysqli_query($conn, $sql_lietkesp);

?>
<div class="button_themsp">
<a href="shoppage.php?quanly=hieusp&ac=them">Add producer</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Producer</td>
    <td>Status</td>
    <td colspan="2">Manage</td>
  </tr>
  <?php
  while($dong=mysqli_fetch_array($row_lietkesp)){

  ?>
  <tr>
    <td><?php  echo $dong['idhieusp'];?></td>
    <td><?php echo $dong['tenhieusp'] ?></td>
    <td><?php
	if($dong['tinhtrang'] == 1 ){
		echo 'Available';
	}else{
		echo 'Unavailable';
	}
    ?></td>
    <td><a href="shoppage.php?quanly=hieusp&ac=sua&id=<?php echo $dong['idhieusp'] ?>"><center><img src="../imgs/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlyhieusp/xuly.php?id=<?php echo $dong['idhieusp']?>" class="delete_link"><center><img src="../imgs/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  }
  ?>
</table>
<div class="trang">
	Trang :
    <?php
	$sql_trang=mysqli_query($conn, "select * from hieusp");
	$count_trang=mysqli_num_rows($sql_trang);
	$a=ceil($count_trang/5);
	for($b=1;$b<=$a;$b++){
		
		if($trang==$b){
		
		echo '<a href="shoppage.php?quanly=hieusp&ac=lietke&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="shoppage.php?quanly=hieusp&ac=lietke&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</div>