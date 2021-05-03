<?php
	$sql = "select * from hieusp where idhieusp = '$_GET[id]'";
	$row=mysqli_query($conn, $sql);
	$dong=mysqli_fetch_array($row);
?>
<div class="button_themsp">
<a href="shoppage.php?quanly=hieusp&ac=lietke">Producer list</a> 
</div>
<form action="modules/quanlyhieusp/xuly.php?id=<?php echo $dong['idhieusp']?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center;font-size:25px;">Producer fix</td>
  </tr>
  <tr>
    <td width="97">Producer</td>
    <td width="87"><input type="text" name="producer" value="<?php echo $dong['tenhieusp'] ?>"></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><select name="status">
      <?php
	if($dong['tinhtrang'] == 1){
	?>
      <option value="1" selected="selected">Available</option>
      <option value="2">Unavailable</option>
      <?php
	}else{
	?>
      <option value="1">Available</option>
      <option value="2" selected="selected">Unavailable</option>
      <?php
	}
	 ?>
      </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Fix" style="cursor:pointer;">
    </div></td>
  </tr>
</table>
</form>


