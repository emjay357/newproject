<?php
	if(isset($_POST['logout'])){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<form action="" method="post" enctype="multipart/form-data">
            <input type="submit" name="logout" value="Đăng xuất" style="background:#06F;color:#fff;width:200px;height:30px;" />
            </form>
<div class="menu">
        <ul>
        <center>
        <li><a href="shoppage.php?quanly=loaisp&ac=them">Quản lý loại sp</a></li>
             <li><a href="shoppage.php?quanly=hieusp&ac=them">Quản lý hiệu sp</a></li>
            <li><a href="shoppage.php?quanly=sanpham&ac=them">Quản lý sản phẩm</a></li>
            
            <li><a href="shoppage.php?quanly=tintuc&ac=them">Quản lý tin tức</a></li>
        </center>
        </ul>
       
    </div>
 <form action="shoppage.php?quanly=search&ac=sp" method="post" enctype="multipart/form-data">
     <p><input type="text" name="name" placeholder="Enter product name" id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="search" value="Search" />
        </p>
        </form>