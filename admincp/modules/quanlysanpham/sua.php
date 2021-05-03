
<?php
	$sql = "select * from sanpham where productid='$_GET[id]' ";
	$row=mysqli_query($conn, $sql);
	$dong=mysqli_fetch_array($row);
 ?>
<div class="button_themsp">
<a href="shoppage.php?quanly=sanpham&ac=lietke">Liệt kê sp</a> 
</div>
<form action="modules/quanlysanpham/xuly.php?id=<?php echo $dong['productid'] ?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="600" border="1">
  <tr>
    <td colspan="2" style="text-align:center;font-size:25px;">Product info fix</td>
  </tr>
  <tr>
    <td width="97">Product name</td>
    <td width="87"><input type="text" name="productname" value="<?php echo $dong['productname'] ?>"></td>
  </tr>
  <tr>
    <td>Image</td>
    <td><input type="text" name="image" value="<?php echo $dong['image'] ?>"></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price" value="<?php echo $dong['price'] ?>"></td>
  </tr>
  <tr>
    <td>Amount</td>
    <td><input type="text" name="amount" value="<?php echo $dong['amount'] ?>"></td>
  </tr>
  <tr>
  <?php
  $sql_loaisp = "select * from loaisp";
  $row_loaisp=mysqli_query($conn, $sql_loaisp);
  ?>
    <td>Product type</td>
    <td><select name="producttype">
     <?php
	while($dong_loaisp=mysqli_fetch_array($row_loaisp)){
		if($dong['producttype']==$dong_loaisp['loaisp']){
	?>
    	<option selected="selected" value="<?php echo $dong_loaisp['loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp'] ?></option>
        <?php
	}else{
		?>
       <option value="<?php echo $dong_loaisp['loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp'] ?></option>
        <?php
	}
	}
		?>
    </select></td>
  </tr>
  <tr>
      <?php
  $sql_hieusp = "select * from hieusp";
  $row_hieusp=mysqli_query($conn, $sql_hieusp);
  ?>
    <td>Producer</td>
    <td><select name="producer">
    <?php
	while($dong_hieusp=mysqli_fetch_array($row_hieusp)){
		if($dong['producer']==$dong_hieusp['idhieusp']){
	?>
    	<option selected="selected" value="<?php echo $dong_hieusp['idhieusp'] ?>"><?php echo $dong_hieusp['tenhieusp'] ?></option>
        <?php
	}else{
		?>
        <option value="<?php echo $dong_hieusp['idhieusp'] ?>"><?php echo $dong_hieusp['tenhieusp'] ?></option>
        <?php
	}
	}
		?>
    </select></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><select name="status">
   
    <option value="1">Available</option>
     <option value="2">Unavailable</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa sản phẩm" style = "cursor: pointer;">
    </div></td>
  </tr>
</table>
</form>


