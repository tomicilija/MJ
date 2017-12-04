<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 
    include_once 'core/db.php';
    $article_id = $_GET['id'];
    $single = $article->get($article_id);
    
    if(isset($_POST['id'])){
        $id=$_POST['id'];
        $qua = $_POST['quantity'];
        $cart=$_SESSION['cart'];
        array_push($cart,$id,$qua);
        $_SESSION['cart']=$cart;
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Marcus Janetti | Luxury Ties For Every Story | Online Shop</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="shortcut icon" href="images/logo_mali_v21.png" type="image/png">
        <link rel="icon" href="images/logo_mali_v21.png" type="image/png">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script>
            $(function () {
                $("#header").load("header.html");
                $("#footer").load("footer.html");
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
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
        <script src="js/simpleCart.min.js"></script>
        <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/memenu.js"></script>
        <script>$(document).ready(function () {

                var alert = document.getElementById("al");
                alert.style.display = "none";
                $(".memenu").memenu();
            });</script>	
        <!--dropdown-->
        <script src="js/jquery.easydropdown.js"></script>	
        <script type="text/javascript">
            $(function () {

                var menu_ul = $('.menu_drop > li > ul'),
                        menu_a = $('.menu_drop > li > a');

                menu_ul.hide();

                menu_a.click(function (e) {
                    e.preventDefault();
                    if (!$(this).hasClass('active')) {
                        menu_a.removeClass('active');
                        menu_ul.filter(':visible').slideUp('normal');
                        $(this).addClass('active').next().stop(true, true).slideDown('normal');
                    } else {
                        $(this).removeClass('active');
                        $(this).next().stop(true, true).slideUp('normal');
                    }
                });

            });

        </script>		
    </head>
    <body> 
        <div id="header"></div>

       
        <!--start-single-->

        <div class="single contact">
            <div class="container">
                <div class="single-main">

                    <div class="alert alert-success cart-notification" role="alert" id="al">
                        <strong>Added to chart! </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click <a href="checkout.html"><strong>HERE</strong></a> to proceed to cart
                    </div>
                    <div class="col-md-9 single-main-left">
                        <div class="sngl-top">
                            <div class="col-md-5 single-top-left">	
                                <div class="flexslider"> 
                                    <div class="slideshow-container">
                                        <div class="mySlides fade1">
                                            <div class="numbertext">1 / 3</div>
                                            <img id="img1" src="images/tie-l-b-g.jpg" style="width:100%">
                                            <div class="text">#</div>
                                        </div>

                                        <div class="mySlides fade1">
                                            <div class="numbertext">2 / 3</div>
                                            <img id="img2" src="images/tie-l-w-b.jpg" style="width:100%">
                                            <div class="text">#</div>
                                        </div>

                                        <div class="mySlides fade1">
                                            <div class="numbertext">3 / 3</div>
                                            <img id="img3" src="images/tie-l-r-w.jpg" style="width:100%">
                                            <div class="text">#</div>
                                        </div>

                                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                    </div>
                                    <br>

                                    <div style="text-align:center">
                                        <span class="dot" onclick="currentSlide(1)"></span>
                                        <span class="dot" onclick="currentSlide(2)"></span>
                                        <span class="dot" onclick="currentSlide(3)"></span>
                                    </div> 
                                </div>
                                <!-- FlexSlider -->
                                <script src="js/imagezoom.js"></script>
                                <script defer src="js/jquery.flexslider.js"></script>
                                <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

                            </div>	
                            <div class="col-md-7 single-top-right">
                                <div class="single-para simpleCart_shelfItem">
                                    <h2 id="name"><?php echo $single['name']; ?></h2>
                                    <strong><?php print_r($_SESSION['cart']); ?></strong>
                                    <div class="star-on">
                                        <ul class="star-footer">
                                            <li onclick="rate('5')"><a href="#str1"></a></li>
                                            <li onclick="rate('4')"><a href="#str2"></a></li>
                                            <li onclick="rate('3')"><a href="#str3"></a></li>
                                            <li onclick="rate('2')"><a href="#str4"></a></li>
                                            <li onclick="rate('1')"><a href="#str5"></a></li>
                                        </ul>
                                        <div class="review">
                                            <a href="#"><strong>(4.9) </strong> 64 Reviews </a>
                                            <p id="star"></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <h5 class="item_price"><?php echo $single['price']; ?> €</h5>
                                    <p><?php echo $single['description']; ?></p>
                                    <div class="available">
                                        <ul>
                                            <li>
                                                <form method="post" role="form">
                                                    Quantity: <input id='qua' type="number" name="quantity" min="1" max="100" value="1">
                                                    <input type="hidden" name="id" value="<?php echo $single['id']; ?>">
                                                    <input type="submit" onclick="addtocart()" class="add-cart item_add" value="ADD TO CART">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="tabs">
                            <ul class="menu_drop">
                                <li class="item1"><a href="#"><img src="images/arrow.png" alt="">Description</a>
                                    <ul>
                                        <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
                                        <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                        <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                                    </ul>
                                </li>
                                <li class="item2"><a href="#"><img src="images/arrow.png" alt="">Additional information</a>
                                    <ul>
                                        <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                        <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                                    </ul>
                                </li>
                                <li class="item3"><a href="#"><img src="images/arrow.png" alt="">Reviews (10)</a>
                                    <ul>
                                        <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
                                        <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                        <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                                    </ul>
                                </li>
                                <li class="item4"><a href="#"><img src="images/arrow.png" alt="">Helpful Links</a>
                                    <ul>
                                        <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                        <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                                    </ul>
                                </li>
                                <li class="item5"><a href="#"><img src="images/arrow.png" alt="">Make A Gift</a>
                                    <ul>
                                        <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
                                        <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                        <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="latestproducts">
                            <div class="product-one">
                                <div class="col-md-3 product-left">
                                    <div class="product-main simpleCart_shelfItem">
                                        <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/btie-a-g-b.jpg" alt="" /></a>
                                        <div class="product-bottom">
                                            <h3>Bow Tie Amsterdam Gold</h3>
                                            <p>0 €</p>
                                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">0 €</span></h4>
                                        </div>
                                        <div class="srch">
                                            <span>-30%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 product-left">
                                    <div class="product-main simpleCart_shelfItem">
                                        <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/btie-a-g-b.jpg" alt="" /></a>
                                        <div class="product-bottom">
                                            <h3>Bow Tie Amsterdam Gold</h3>
                                            <p>0 €</p>
                                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">0 €</span></h4>
                                        </div>
                                        <div class="srch">
                                            <span>-30%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 product-left">
                                    <div class="product-main simpleCart_shelfItem">
                                        <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/btie-a-g-b.jpg" alt="" /></a>
                                        <div class="product-bottom">
                                            <h3>Bow Tie Amsterdam Gold</h3>
                                            <p>0 €</p>
                                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">0 €</span></h4>
                                        </div>
                                        <div class="srch">
                                            <span>-30%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 product-left">
                                    <div class="product-main simpleCart_shelfItem">
                                        <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/btie-a-g-b.jpg" alt="" /></a>
                                        <div class="product-bottom">
                                            <h3>Bow Tie Amsterdam Gold</h3>
                                            <p>0 €</p>
                                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">0 €</span></h4>
                                        </div>
                                        <div class="srch">
                                            <span>-30%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--end-single-->
        <script>
            function rate(vre) {

                document.getElementById("star").innerHTML = vre;
            }

            function addtocart() {
                
                var alert = document.getElementById("al");
                alert.style.display = "block";
                setTimeout(function () {
                    $("#al").fadeOut(1500);
                }, 5000);
            }


            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                //n++
                if (n > slides.length) {
                    n = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[n - 1].style.display = "block";
                dots[n - 1].className += " active";
                //setTimeout(showSlides, 5000); // Change image every 2 seconds
            }


        </script>

        <div id="footer"></div>
    </body>
</html>