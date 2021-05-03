
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
	$sql_lietkesp="select * from sanpham,hieusp,loaisp where loaisp.loaisp=sanpham.producttype and hieusp.idhieusp=sanpham.producer order by sanpham.productid asc limit $trang1,5 ";
	$row_lietkesp=mysqli_query($conn, $sql_lietkesp);

?>
<div class="button_themsp">
<a href="shoppage.php?quanly=sanpham&ac=them">Thêm Mới</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Product name</td>
    <td>Image</td>
    <td>Price</td>
    <td>Amount</td>
    <td>Product type</td>
    <td>Producer</td>
    <td>Status</td>
    <td colspan="2">Manage</td>
  </tr>
  <?php
  while($dong=mysqli_fetch_array($row_lietkesp)){

  ?>
  <tr>
  	
    <td><?php  echo $dong['productid'];?></td>
    <td><?php echo $dong['productname'] ?></td>
    <td><img src="<?php echo $dong['image'] ?>" width="80" height="80" />
    <?php
    echo $dong['image'];
    ?>
    <a href="shoppage.php?quanly=gallery&ac=lietke&id=<?php echo $dong['productid'] ?>" style="text-align:center;text-decoration:none; font-size:18px;color:#06F;">Gallery</a>
    </td>
    <td><?php echo number_format($dong['price']) ?></td>
    <td><?php echo $dong['amount'] ?></td>
    <td><?php echo $dong['tenloaisp'] ?></td>
    <td><?php echo $dong['tenhieusp'] ?></td>
    <td><?php $sql_tinhtrang = "select status from sanpham";
	$row_tinhtrang = mysqli_query($conn, $sql_tinhtrang);
	$dong_tinhtrang=mysqli_fetch_array($row_tinhtrang);
	if($dong_tinhtrang['status'] == 1 ){
		echo 'Available';
	}elseif($dong_tinhtrang['status'] ==2){
		echo 'Unavailable';
	}
    ?></td>
    <td><a href="shoppage.php?quanly=sanpham&ac=sua&id=<?php echo $dong['productid'] ?>" ><center><img src="../imgs/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlysanpham/xuly.php?id=<?php echo $dong['productid']?>" class="delete_link"><center><img src="../imgs/delete.png" width="30" height="30"   /></center></a></td>
  </tr>
  <?php
  }
  ?>
</table>
<div class="trang">
	Trang :
    <?php
	$sql_trang=mysqli_query($conn, "select * from sanpham");
	$count_trang=mysqli_num_rows($sql_trang);
	$a=ceil($count_trang/5);
	for($b=1;$b<=$a;$b++){
		
		if($trang==$b){
		
		echo '<a href="shoppage.php?quanly=sanpham&ac=lietke&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="shoppage.php?quanly=sanpham&ac=lietke&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</div>
