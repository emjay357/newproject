<div class="button_themsp">
<a href="shoppage.php?quanly=loaisp&ac=lietke">Product type</a> 
</div>
<form action="modules/quanlyloaisp/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">Add product type</td>
  </tr>
  <tr>
    <td width="97">Product type</td>
    <td width="87"><input type="text" name="producttype"></td>
  </tr>
  <tr>
    <td width="97">Product type name</td>
    <td width="87"><input type="text" name="producttypename"></td>
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
      <input type="submit" name="them" value="Thêm">
    </div></td>
  </tr>
</table>
</form>


