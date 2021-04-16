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
                                <form id="form-search" role="form" method="GET" action="./index.php">
                                    <div>
                                        <div class="input-group ml-4" style="width: 100%">
                                            <input type="text" value="" id="search" class="form-control"
                                                   placeholder="search">
                                            <span class="input-group-btn">
                                                <button id="btn-search" name="searchbox" class="btn btn" style="background-color: rgb(254, 209, 1);">
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
    <div style="background-color: black;" class="carousel-inner" role="listbox">
        <div id="backgroundimg">
            <div class="single-slide">
                <div class="slide-bg slide-one"></div>
                <div class="slide-text-wrapper">
                    <div class="slide-text">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    <div class="slide-content">
                                        <h2>We are awesome</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ab molestiae minus reiciendis! Pariatur ab rerum, sapiente ex nostrum laudantium.</p>
                                        <p>Hello world</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="productsection divfix">
    <p class="tittle" style="margin-left: 650px; font-family: Garamond;">TOP SELLING</p>
    <img src="./image/image/khung.jpg" id="khung">
    <div class="productdiv">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="fridgeid" value="e1" class="productname">
            <img src="./image/image/topselling1.jpg" class="productimg">
            <p>LG Smart Inverter</p>
            </button>
            <button type="submit" name="airconditionerid" value="b1" class="productname">
            <img src="./image/image/topselling2.jpg" class="productimg">
            <p>LG COOL™ Inverter</p>
            </button>
            <button type="submit" name="microwaveid" value="d1" class="productname">
            <img src="./image/image/topselling3.jpg" class="productimg">
            <p>T240WHT Microwave</p>
            </button>
            <button type="submit" name="microwaveid" value="d2" class="productname">
            <img src="./image/image/topselling4.jpg" class="productimg">
            <p>Panasonic Countertop</p>
            </button>
            <button type="submit" name="fanid" value="a1" class="productname">
            <img src="./image/image/topselling5.jpg" class="productimg">
            <p>Toshiba Inverter RAS-H</p>
            </button>
        </form>
        </div>
    </div>
    <div style="background-image: url(./image/blackbackground.jpg);">
    <div class="productsection divfix" style="background-image: url(./image/windbackground.jpg); background-size: 100%;">
    <p class="tittle" style="margin-left: 730px; font-family: Garamond; margin-top: 15px; color: white;">Fan</p>
    <div class="productdiv">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="fanid" value="a1" class="productname">
            <img src="./image/image/topselling5.jpg" class="productimg">
            <p>Toshiba Inverter RAS-H</p>
            </button>
            <button type="submit" name="fanid" value="a2" class="productname">
            <img src="./image/image/fan2.jpg" class="productimg">
            <p>SenKo BXK45</p>
            </button>
            <button type="submit" name="fanid" value="a3" class="productname">
            <img src="./image/image/shopping.jpg" class="productimg">
            <p>SenKo BX1212</p>
            </button>
            <button type="submit" name="fanid" value="a4" class="productname">
            <img src="./image/image/download.jpg" class="productimg">
            <p>Tiross TS-952</p>
            </button>
            <button type="submit" name="fanid" value="a5" class="productname">
            <img src="./image/image/images.jpg" class="productimg">
            <p>Tiross HK-536</p>
            </button>
        </form>
        </div>
    </div>
    </div>
    <div class="productsection divfix" style="background-image: url(./image/snowbackground.jpg);">
    <p class="tittle" style="margin-left: 657px; font-family: Garamond; margin-top: 15px;">Air conditioner</p>
    <div class="productdiv">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="airconditionerid" value="b1" class="productname">
            <img src="./image/image/topselling2.jpg" class="productimg">
            <p>LG COOL™ Inverter</p>
            </button>
            <button type="submit" name="airconditionerid" value="b2" class="productname">
            <img src="./image/image/air-conditioner.jpg" class="productimg">
            <p>LG V10ENW1</p>
            </button>
            <button type="submit" name="airconditionerid" value="b3" class="productname">
            <img src="./image/image/airconditioner2.jpg" class="productimg">
            <p>Toshiba RAS-H10D</p>
            </button>
            <button type="submit" name="airconditionerid" value="b4" class="productname">
            <img src="./image/image/air3.jpg" class="productimg">
            <p>Daikin FTF25UV1V</p>
            </button>
            <button type="submit" name="airconditionerid" value="b5" class="productname">
            <img src="./image/image/air4.jpg" class="productimg">
            <p>LG B10END Inverter</p>
            </button>
        </form>
        </div>
    </div>
    </div>
    <div class="productsection divfix" style="background-image: url(./image/Well-Lit-LED-Bulbs.jpg); background-size:60%;">
    <p class="tittle" style="margin-left: 692px; font-family: Garamond; margin-top: 15px; color:white;">Light bulb</p>
    <div class="productdiv">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="lightbulbid" value="c1" class="productname">
            <img src="./image/image/topselling1.jpg" class="productimg">
            <p>LG Smart Inverter</p>
            </button>
            <button type="submit" name="lightbulbid" value="c2" class="productname">
            <img src="./image/image/topselling2.jpg" class="productimg">
            <p>LG COOL™ Inverter</p>
            </button>
            <button type="submit" name="lightbulbid" value="c3" class="productname">
            <img src="./image/image/topselling3.jpg" class="productimg">
            <p>T240WHT Microwave</p>
            </button>
            <button type="submit" name="lightbulbid" value="c4" class="productname">
            <img src="./image/image/topselling4.jpg" class="productimg">
            <p>Panasonic Countertop</p>
            </button>
            <button type="submit" name="lightbulbid" value="c5" class="productname">
            <img src="./image/image/topselling5.jpg" class="productimg">
            <p>Toshiba Inverter RAS-H</p>
            </button>
        </form>
        </div>
    </div>
    </div>
    <div class="productsection divfix" style="background-image: url(./image/icebackground.jpg); background-size: 100%;">
    <p class="tittle" style="margin-left: 720px; font-family: Garamond; margin-top: 15px;">Fridge</p>
    <div class="productdiv">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="fridgeid" value="e1" class="productname">
            <img src="./image/image/topselling1.jpg" class="productimg">
            <p>LG Smart Inverter</p>
            </button>
            <button type="submit" name="fridgeid" value="e2" class="productname">
            <img src="./image/image/topselling2.jpg" class="productimg">
            <p>LG COOL™ Inverter</p>
            </button>
            <button type="submit" name="fridgeid" value="e3" class="productname">
            <img src="./image/image/topselling3.jpg" class="productimg">
            <p>T240WHT Microwave</p>
            </button>
            <button type="submit" name="fridgeid" value="e4" class="productname">
            <img src="./image/image/topselling4.jpg" class="productimg">
            <p>Panasonic Countertop</p>
            </button>
            <button type="submit" name="fridgeid" value="e5" class="productname">
            <img src="./image/image/topselling5.jpg" class="productimg">
            <p>Toshiba Inverter RAS-H</p>
            </button>
        </form>
        </div>
    </div>
    </div>
    <div class="productsection divfix" style="background-image: url(./image/plasma.jpg);">
    <p class="tittle" style="margin-left: 690px; font-family: Garamond; margin-top: 15px; color: white;">Microwave</p>
    <div class="productdiv">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="microwaveid" value="d1" class="productname">
            <img src="./image/image/topselling4.jpg" class="productimg">
            <p>Panasonic Countertop</p>
            </button>
            <button type="submit" name="microwaveid" value="d2" class="productname">
            <img src="./image/image/topselling3.jpg" class="productimg">
            <p>T240WHT Microwave</p>
            </button>
            <button type="submit" name="microwaveid" value="d3" class="productname">
            <img src="./image/image/topselling1.jpg" class="productimg">
            <p>LG Smart Inverter</p>
            </button>
            <button type="submit" name="microwaveid" value="d4" class="productname">
            <img src="./image/image/topselling2.jpg" class="productimg">
            <p>LG COOL™ Inverter</p>
            </button>
            <button type="submit" name="microwaveid" value="d5" class="productname">
            <img src="./image/image/topselling5.jpg" class="productimg">
            <p>Toshiba Inverter RAS-H</p>
            </button>
        </form>
        </div>
    </div>
    </div>
    </div>
    
<?php
if(isset($_GET['fanid']))
{
redirect("http://localhost:83/fan.php?fanid=".$_GET['fanid']);
}
if(isset($_GET['airconditionerid']))
{
redirect("http://localhost:83/airconditioner.php?airconditionerid=".$_GET['airconditionerid']);
}
if(isset($_GET['fridgeid']))
{
redirect("http://localhost:83/fridge.php?fridgeid=".$_GET['fridgeid']);
}
if(isset($_GET['lightbulbid']))
{
redirect("http://localhost:83/lightbulb.php?lightbulbid=".$_GET['lightbulbid']);
}
if(isset($_GET['microwaveid']))
{
redirect("http://localhost:83/microwave.php?microwaveid=".$_GET['microwaveid']);
}
function redirect($url){
echo '<script>window.location="'.$url.'"</script>';
}
?>
</body>
</html>