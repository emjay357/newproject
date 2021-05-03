
<?php
	if(isset($_POST['search'])){
	$search=$_POST['name'];
	echo 'ID :<strong>'.' '.$search.'</strong><br/>';
	$sql_timkiem="select * from sanpham,hieusp,loaisp where sanpham.producttype=loaisp.loaisp and sanpham.producer=hieusp.idhieusp and productid='".$search."'";
	$row_timkiem=mysqli_query($conn, $sql_timkiem);
	$count=mysqli_num_rows($row_timkiem);
	if($count>0){
	
?>
<h3>Result</h3>

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
  while($dong=mysqli_fetch_array($row_timkiem)){

  ?>
  <tr>
    <td><?php  echo $dong['productid'];?></td>
    <td><?php echo $dong['productname'] ?></td>
    <td><img src="../<?php echo $dong['image'] ?>" width="80" height="80" /></td>
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
		echo 'Unvailable';
	}
    ?></td>
    <td><a href="shoppage.php?quanly=sanpham&ac=sua&id=<?php echo $dong['productid'] ?>"><center><img src="../imgs/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlysanpham/xuly.php?id=<?php echo $dong['productid']?>"><center><img src="../imgs/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  }
	}else{
	  echo 'No result found';
  }
  }
  ?>
</table>
