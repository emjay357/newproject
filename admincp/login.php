<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style-login.css" />
	<title>admin login page</title>
</head>

<?php
	session_start();
	include('modules/config.php');
	if(isset($_POST['login'])){
        $connection = new PDO("mysql:host=localhost", "root", "");
        $sql = "USE eproject;";
        $connection->exec($sql);
		$sql="select count(*) as count from admin WHERE username = :user and password = :pass";
		$stmt = $connection->prepare($sql);
		$stmt->bindParam(':user', $_POST['username']);
		$stmt->bindParam(':pass', $_POST['password']);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
        $result = $stmt->fetch();
		if($result["count"]>0){
			$_SESSION['dangnhap']=$_POST['username'];
			header('location:shoppage.php');
		}else{
			echo '<script type="text/javascript">alert("admin username or password is incorrect");</script>';
		}
	}
?>
<body>
<div id="login">
	<form action="login.php" method="post" enctype="multipart/form-data">
    <h2>Đăng nhập</h2>
    <input type="text" name="username" id="username" placeholder="Enter username..." required="required" />
     <input type="password" name="password" id="password" placeholder="Enter password..." required="required" />
      <input type="submit" name="login" id="button" value="Sign in"/>
    </form>

</div>
	

</div>
</body>
</html>