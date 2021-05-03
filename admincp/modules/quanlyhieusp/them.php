<div class="button_themsp">
<a href="shoppage.php?quanly=hieusp&ac=lietke">Producer list</a> 
</div>
<form action="modules/quanlyhieusp/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center;font-size:25px;">Add producer</td>
  </tr>
  <tr>
    <td width="97">Producer</td>
    <td width="87"><input type="text" name="producer"></td>
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
      <input type="submit" name="them" value="Add" style="cursor:pointer;">
    </div></td>
  </tr>
</table>
</form>


