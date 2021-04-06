<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./register.php" method="get">
    <input type="text" name="productid" placeholder="Enter Id"><br>
    <input type="text" name="productname" placeholder="Enter productname"><br>
    <input type="text" name="productimg" placeholder="Enter imgsrc"><br>
    <input type="submit">
    </form>
        <?php
        require "./database.php";
        if(isset($_GET["productid"]) == TRUE){
            $productid = $_GET["productid"];
            $productname = $_GET["productname"];
            $productimg = $_GET["productimg"];
            $product = new product;
            $product->inputproduct($productid,$productname,$productimg);
        }
    ?>
</body>
</html>