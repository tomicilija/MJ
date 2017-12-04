
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include_once 'core/db.php';
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
                $(".memenu").memenu();
            });</script>	
        <!--dropdown-->
        <script src="js/jquery.easydropdown.js"></script>			
    </head>
    <body> 
        <script>
            $(document).ready(function () {
                var cart = JSON.parse(localStorage.getItem("cart"));
                var res = cart.split(",");
                res.pop();
                document.getElementById("izpis").innerHTML = res;
                var name = "y";
                var img = "images/tie-a-b-g.jpg";
                var hastag = "1";
                var stev = 1;
                var hea = 0;
                var qua = [0];
                var urejeno = [0];
                urejeno[0] = res[0];
                var nas = true;
                var y = 0;
                var x = 0;
                for (var i = 0; i < res.length; i++) {
                    //alert(urejeno + '  ' + qua);
                    for (var j = 0; j < urejeno.length; j++) {
                        if (res[i] == urejeno[j]) {
                            qua[y]++;
                            //alert('add' + j + '/' + y);
                        }
                        if (res[i + 1] == urejeno[j]) {
                            nas = false
                        }
                    }
                    if (nas && i != res.length - 1) {
                        urejeno = urejeno + ',' + res[i + 1];
                        y++;
                        qua[y] = 0;
                    }
                    //alert('neki');
                    nas = true;
                }
                try {
                    res = urejeno.split(",");
                } catch (a) {
                    res=urejeno;
                }

                document.getElementById("abc").innerHTML = urejeno;
                document.getElementById("bagitems").innerHTML = qua;
                res.forEach(function (entry) {
                    //alert('add');


                    var MyDiv1 = document.getElementById('cart-prod');
                    document.getElementById("cart-prod").innerHTML = MyDiv1.innerHTML + '<ul class="cart-header' + hea + '"><div class="close' + stev + '"> </div>' +
                            '<li class="ring-in"><a href="single.html#' + hastag + '" ><img src="' + img + '" class="img-responsive" alt=""></a>' +
                            '</li><li><span class="name">' + name + '</span></li>' +
                            '<li><span class="cost">$ 290.00</span></li>' +
                            '<li><span>' + qua[x] + '</span></li>' +
                            '<li><span>Free</span><p>Delivered in 2-3 business days</p></li>' +
                            '<div class="clearfix"> </div></ul>';
                    stev++;
                    hea++;
                    x++;
                });
                //document.getElementById("bagitems").innerHTML = hea;


            });
        </script>

        <div id="header"></div>
        <!--start-ckeckout-->
        <div class="ckeckout">
            <div class="container">
                <div class="ckeck-top heading">
                    <h2 id="izpis">Checkout</h2>
                    <button onclick="empty()">Empty</button>
                </div>
                <div class="ckeckout-top">
                    <div class="cart-items">
                        <h3><span id='abc'>My Shopping Bag</span> (<span id="bagitems">0</span>)</h3>
                        <script>
                            $(document).ready(function (c) {
                                $('.close1').on('click', function (c) {
                                    $('.cart-header0').fadeOut('slow', function (c) {
                                        $('.cart-header0').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(0, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close2').on('click', function (c) {
                                    $('.cart-header1').fadeOut('slow', function (c) {
                                        $('.cart-header1').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(1, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close3').on('click', function (c) {
                                    $('.cart-header2').fadeOut('slow', function (c) {
                                        $('.cart-header2').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(2, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close4').on('click', function (c) {
                                    $('.cart-header3').fadeOut('slow', function (c) {
                                        $('.cart-header3').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(3, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close5').on('click', function (c) {
                                    $('.cart-header4').fadeOut('slow', function (c) {
                                        $('.cart-header4').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(4, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close6').on('click', function (c) {
                                    $('.cart-header5').fadeOut('slow', function (c) {
                                        $('.cart-header5').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(5, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close7').on('click', function (c) {
                                    $('.cart-header6').fadeOut('slow', function (c) {
                                        $('.cart-header6').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(6, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close8').on('click', function (c) {
                                    $('.cart-header7').fadeOut('slow', function (c) {
                                        $('.cart-header7').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(7, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close9').on('click', function (c) {
                                    $('.cart-header8').fadeOut('slow', function (c) {
                                        $('.cart-header8').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(8, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close10').on('click', function (c) {
                                    $('.cart-header9').fadeOut('slow', function (c) {
                                        $('.cart-header9').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(9, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close11').on('click', function (c) {
                                    $('.cart-header10').fadeOut('slow', function (c) {
                                        $('.cart-header10').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(10, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close12').on('click', function (c) {
                                    $('.cart-header11').fadeOut('slow', function (c) {
                                        $('.cart-header11').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(11, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close13').on('click', function (c) {
                                    $('.cart-header12').fadeOut('slow', function (c) {
                                        $('.cart-header12').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(12, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close14').on('click', function (c) {
                                    $('.cart-header13').fadeOut('slow', function (c) {
                                        $('.cart-header13').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(13, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close15').on('click', function (c) {
                                    $('.cart-header14').fadeOut('slow', function (c) {
                                        $('.cart-header14').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(14, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                            $(document).ready(function (c) {
                                $('.close16').on('click', function (c) {
                                    $('.cart-header15').fadeOut('slow', function (c) {
                                        $('.cart-header15').remove();
                                        var cart = JSON.parse(localStorage.getItem("cart"));
                                        var res = cart.split(",");
                                        res.splice(15, 1);
                                        localStorage.setItem("cart", JSON.stringify(res.toString()));
                                    });
                                });
                            });
                        </script> 

                        <div class="in-check" id="cart-prod" >
                            <ul class="unit">
                                <li><span>Item</span></li>
                                <li><span>Product</span></li>		
                                <li><span>Price</span></li>		
                                <li><span>Quantity</span></li>
                                <li><span>Delivery Details</span></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>  
                    </div>
                    <a class="btn btn-success" href="step1.php" role="button">Checkout</a>
                </div>
            </div>
        </div>
        <!--end-ckeckout-->
        
        

        <script>
            function empty() {
                var names = null;
                localStorage.setItem("cart", JSON.stringify(names));
            }
        </script>

        <div id="footer"></div>
    </body>
</html>