<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">  
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./styleneed.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./product.css">
</head>
<body>  
<?php
    require "database.php";
    if(isset($_GET['fanid']) == TRUE){
    $productid = $_GET['fanid'];
    $product = new product;   
    $data = $product->productsearch($productid);
    $productname = $data["productname"];
    $productimg = $data["productimg"];
    $para1 = $data["para1"];
    $para2 = $data["para2"];
    $para3 = $data["para3"];
    $para4 = $data["para4"];
    $para5 = $data["para5"];
    $price = $data["price"];
    $info = $data["infomation"];
}
?>
   <div style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div>
                        <h1><a href="./index.php">
                            <img src="./image/logofix6.png" style="height: 65px; ">
                        </a></h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row border">
                        <div class="search-box">
                            <div>
                                <form id="form-search" role="form" method="GET" action="">
                                    <div>
                                        <div class="input-group ml-4" style="width: 100%">
                                            <input type="text" name="search" id="search" class="form-control"
                                                   placeholder="findwhat">
                                            <span class="input-group-btn">
                                                <button id="btn-search" value="search" class="btn btn" style="background-color: rgb(254, 209, 1);">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
        </div>
    </div>
    </div>
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="taskbar" href="index.php">Home</a></li>
                        <li><a class="taskbar" href="">Introduction</a></li>
                        <li><a class="taskbar" href="#">Our Product</a></li>
                        <li><a class="taskbar" href="#">Cart</a></li>
                        <li><a class="taskbar" href="">Checkout</a></li>
                        <li><a class="taskbar" href="#">Category</a></li>
                        <li><a class="taskbar" href="#">Contact Us</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
    <div style="background-color: black;" class="carousel-inner overwirte" role="listbox" id="backgroundimgproduct">
        <div>
            <div class="single-slide">
                <div class="slide-bg slide-one"></div>
                <div class="slide-text-wrapper">
                    <div class="slide-text">
                        <div class="container">
                            <div class="row">
                                <div class="productdivinfo">
                                <img src="<?php echo $productimg; ?>" class="productimginfo">
                                    <p class="productnameinfo"><?php echo $productname; ?></p>
                                    <p class="productpriceinfo"><?php echo $price; ?></p>
                                </div>
                                <div class="col-md-6 col-md-offset-6">
                                <p class="productintro">Product introduction</p>
                                    <p class="productintrotext"><?php echo $info; ?></p>
                                    <div class="slide-content">
                                        <div style="display: inline-block;" id="feature"><p>Basic product parameter</p>
                                        <ul style="display: inline;">
                                            <li id="parameter"><p>Size<span style="margin-left: 51.5px;">:<?php echo " ".$para1; ?></p></li>
                                            <li id="parameter"><p>Wattage<span style="margin-left: 10px;">:<?php echo " ".$para2; ?></span></p></li>
                                            <li id="parameter"><p>Origin<span style="margin-left: 35px;">:<?php echo " ".$para3; ?></span></p></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>