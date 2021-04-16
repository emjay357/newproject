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
    if(isset($_GET['fan']) == TRUE){
    $productid = $_GET['fan'];
    $product = new product;   
    $data = $product->productsearch($productid);
    $productname = $data["productname"];
    $productimg = $data["productimg"];
}
    if(isset($_GET['airconditioner']) == TRUE){
    $productid = $_GET['airconditioner'];
    $product = new product;   
    $data = $product->productsearch($productid);
    $productname = $data["productname"];
    $productimg = $data["productimg"];
}
    if(isset($_GET['lightbulb']) == TRUE){
    $productid = $_GET['lightbulb'];
    $product = new product;   
    $data = $product->productsearch($productid);
    $productname = $data["productname"];
    $productimg = $data["productimg"];
}
    if(isset($_GET['microwave']) == TRUE){
    $productid = $_GET['microwave'];
    $product = new product;   
    $data = $product->productsearch($productid);
    $productname = $data["productname"];
    $productimg = $data["productimg"];
}
    if(isset($_GET['fridge']) == TRUE){
    $productid = $_GET['fridge'];
    $product = new product;   
    $data = $product->productsearch($productid);
    $productname = $data["productname"];
    $productimg = $data["productimg"];
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
                            <?php
                                $link = "./image/image/topselling1.jpg";
                            ?>
                                <div class="productdivinfo">
                                    <p class="productnameinfo">LG Smart Inverter</p>
                                    <p class="productpriceinfo">1.000.000 VND</p>
                                </div>
                                <div class="col-md-6 col-md-offset-6">
                                <p class="productintro">Product introduction</p>
                                <p class="productintrotext">Detailed Specifications Refrigerator Samsung Inverter 208 liters RT20HAR8DBU / SV
Product characteristics,
Usable capacity: 209 liters,
Number of doors: 2 wings,
Number of users: 2 - 3 people,
Freezer capacity: 54 liters,
Freezer capacity: 155 liters,
Inverter technology: Inverter Refrigerator,
Declared power consumption according to TCVN: ~ 31.2 kWh / day,
Power saving mode: Digital Inverter Technology,
Refrigeration technology: Multi-dimensional cooling,
Antibacterial and deodorizing technology: Deodorizer activated carbon filter,
Food preservation technology: Large vegetable compartment keeps Big Box moisture,
Utilities: Large vegetable compartment, Inverter saves electricity,
Cabinet type: Top freezer,
Refrigerator door material: Mirror polish metal,
Material of freezer tray: Tempered glass,
Size - Weight: Height 1.520 mm - Width 620 mm - Depth 555 mm - Weight 50.5 kg,
Place of production: Vietnam Origin: Korean, 
Release date: 2020,
Genuine warranty: 24 months,
Brand: LG.</p>
                                    <div class="slide-content">
                                        <div style="display: inline-block;" id="feature"><p>Basic product parameter</p>
                                        <ul style="display: inline;">
                                            <li id="parameter"><p>Capacity: 209 (L)</p></li>
                                            <li id="parameter"><p>Size<span style="margin-left: 48px;">: 555x1,520x620</span></p></li>
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