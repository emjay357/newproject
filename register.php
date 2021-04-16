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
    <input type="text" name="para1" placeholder="Enter para1"><br>
    <input type="text" name="para2" placeholder="Enter para2"><br>
    <input type="text" name="para3" placeholder="Enter para3"><br>
    <input type="text" name="para4" placeholder="Enter para4"><br>
    <input type="text" name="para5" placeholder="Enter para5"><br>
    <input type="text" name="price" placeholder="Enter price"><br>
    <input type="text" name="infomation" placeholder="Enter infomation"><br>
    <input type="submit">
    </form>
        <?php
        require "./database.php";
        if(isset($_GET["productid"]) == TRUE){
            $productid = $_GET["productid"];
            $productname = $_GET["productname"];
            $productimg = $_GET["productimg"];
            $para1 = $_GET["para1"];
            $para2 = $_GET["para2"];
            $para3 = $_GET["para3"];
            $para4 = $_GET["para4"];
            $para5 = $_GET["para5"];
            $price = $_GET["price"];
            $info = $_GET["infomation"];
            $product = new product;
            $product->inputproduct($productid,$productname,$productimg,
                                   $para1,$para2,$para3,$para4,$para5,$price,$info);
        }
    ?>
</body>
</html>