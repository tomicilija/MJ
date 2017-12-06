<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    include_once 'core/db.php';
    $price =  $article->getCartPrice($_SESSION['cart']);
?>
<!DOCTYPE html>
<html>
<head>
        <title>Marcus Janetti | Luxury Ties For Every Story | Online Shop</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="images/logo_mali_v21.png" type="image/png">
<link rel="icon" href="images/logo_mali_v21.png" type="image/png">
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>			
</head>
<body> 
    
	<!--start-logo-->
	<div class="logo">
            <table>
                <tr>
                    <td>
                        <a href="index.php"><h1>Marcus Janetti</h1></a>
                    </td>
                    <td>
                        <a href="index.php"><img src="images/Logo_v_hexu.png" alt="logo" width="108" height="90"></a>
                    </td>
                    <td>
                        <div class="top-header-main">
                            <div class="col-md-6 top-header-left">
                                    <div class="cart box_1">
                                            <a href="checkout.php">
                                                     <div class="total"> <?php echo round($price,2); ?>0 €</div>
                                                            <img src="images/cart-2.png" alt="" height="15"/>
                                            </a>
                                            <div class="clearfix"> </div>
                                    </div>
                            </div>
                            <div class="clearfix"></div>
			</div>
                    </td>
                </tr>
            </table>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container head">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="grid"><a href="index.php">Home</a></li>
						<li class="grid"><a href="ties.php">Ties</a></li>
						<li class="grid"><a href="bowties.php">Bow Ties</a></li>
						<li class="grid"><a href="products.html">Packages</a></li>
						<li class="grid"><a href="contact.html">About us</a></li>
						<li class="grid"><a href="contact.html">Contact</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--
                        <div class="col-md-3 header-right"> 
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
                            -->
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->
    </body>
</html>
