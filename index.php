<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
    include_once 'core/db.php';
    
    //index artiklov v array
    $articles = $article->index(0);
?>

<!DOCTYPE html>
<html>
<head>
        <title>Marcus Janetti | Luxury Ties For Every Story | Online Shop</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="shortcut icon" href="images/logo_mali_v21.png" type="image/png">
        <link rel="icon" href="images/logo_mali_v21.png" type="image/png">
<link rel="icon" href="images/logo_mali_v2.png" type="image/png">
<script src="js/jquery-1.11.0.min.js"></script>
<script>
    
$(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
});
</script>
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
    <div id="header"></div>
    <!--banner-starts-->
    <div class="bnr" id="home">
            <div  id="top" class="callbacks_container">
                    <ul class="rslides" id="slider4">
                        <li>
                                    <img src="images/bnr-1.jpg" alt=""/>
                            </li>
                            <li>
                                    <img src="images/bnr-2.jpg" alt=""/>
                            </li>
                            <li>
                                    <img src="images/bnr-3.jpg" alt=""/>
                            </li>
                    </ul>
            </div>
            <div class="clearfix"> </div>
    </div>
    <!--banner-ends--> 
    <!--Slider-Starts-Here-->
                            <script src="js/responsiveslides.min.js"></script>
                     <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                          // Slideshow 4
                          $("#slider4").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                              $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                              $('.events').append("<li>after event fired.</li>");
                            }
                          });

                        });
                      </script>
                    <!--End-slider-script-->

    <!--about-starts-->
    <div class="about"> 
            <div class="container">
                    <div class="about-top grid-1">
                            <a href="ties.html"><div class="col-md-4 about-left">
                                    <figure class="effect-bubba">
                                        <img class="img-responsive" src="images/tie-r-b-g1.jpg" alt=""/>
                                            <figcaption>
                                                    <h2>Ties</h2>
                                                    <p></p>	
                                            </figcaption>			
                                    </figure>
                            </div></a>
                            <a href="#"><div class="col-md-4 about-left">
                                    <figure class="effect-bubba">
                                            <img class="img-responsive" src="images/bowTie-b-g1.jpg" alt=""/>
                                            <figcaption>
                                                    <h2>Bow Ties</h2>
                                                    <p></p>	
                                            </figcaption>			
                                    </figure>
                            </div></a>
                            <a href="#"><div class="col-md-4 about-left">
                                    <figure class="effect-bubba">
                                            <img class="img-responsive" src="images/soon.jpg" alt=""/>
                                            <figcaption>
                                                    <h2>Packages</h2>
                                                    <p></p>	
                                            </figcaption>			
                                    </figure>
                            </div></a>
                            <div class="clearfix"></div>
                    </div>
            </div>
    </div>
    <!--about-end-->
    <!--product-starts-->
    <div class="sekcija">
        <h1>Featured</h1>
    </div>
    <div class="product"> 
            <div class="container">
                    <div class="product-top">
                            
                                   <?php 
                                        //
                                        foreach($articles as $row)
                                        {
                                    ?>
                                    <div class="product-one">
                                    <div class="col-md-3 product-left">
                                            <div class="product-main simpleCart_shelfItem">
                                                    <a href="single.php?id=<?php echo $row['id']; ?>" class="mask"><img class="img-responsive zoom-img" src="images/<?php echo $row['koda']; ?>.jpg" alt="" /></a>
                                                    <div class="product-bottom">
                                                            <h3><?php echo $row['name']; ?></h3>
                                                            <p><?php echo $row['price']; ?> €</p>
                                                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">0 €</span></h4>
                                                    </div>
                                                    <div class="srch">
                                                            <span>-30%</span>
                                                    </div>
                                            </div>
                                    </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                            					
                    </div>
            </div>
    </div>
    <!--product-end-->

<div id="footer"></div>
</body>
</html>