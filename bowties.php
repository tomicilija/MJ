
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    include_once 'core/db.php';
    
    //index artiklov v array
    $milano =  $article->getEdition('Milano', 1);
    $berlin =  $article->getEdition('Berlin', 1);
    $zagreb =  $article->getEdition('Zagreb', 1);
    
    
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
        <div id="header"></div>
        <!--prdt-starts-->


        <div class="prdt"> 
            <div class="container">
                <div class="prdt-top">
                    <div class="col-md-9 prdt-left">
                        <div class="sekcija" id="e1">
                            <h1>Milano Edition</h1>
                            <div class="product"> 
                                    <div class="container">
                                            <div class="product-top">
                                                <?php 
                                                    $st = 1;
                                                    foreach($milano as $row)
                                                    {
                                                ?>
                                                <div class="product-one">
                                                <div class="col-md-3 product-left" id="c<?php echo $st; $st++;?>">
                                                        <div class="product-main simpleCart_shelfItem">
                                                                <a href="single.php?id=<?php echo $row['id']; ?>" class="mask"><img class="img-responsive zoom-img" src="images/<?php echo $row['code']; ?>.jpg" alt="" /></a>
                                                                <div class="product-bottom">
                                                                        <h3><?php echo $row['name']; ?></h3>
                                                                        <p><?php echo $row['price']; ?> €</p>
                                                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price"><?php echo $row['discount']; ?> €</span></h4>
                                                                </div>
                                                                <div class="srch">
                                                                        <span>-60%</span>
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
                        </div>

                        <div class="sekcija" id="e2">
                            <h1>Berlin Edition</h1>
                            <div class="product"> 
                                    <div class="container">
                                            <div class="product-top">
                                                <?php 
                                                    $st = 1;
                                                    foreach($berlin as $row)
                                                    {
                                                ?>
                                                <div class="product-one">
                                                <div class="col-md-3 product-left" id="c<?php echo $st; $st++;?>">
                                                        <div class="product-main simpleCart_shelfItem">
                                                                <a href="single.php?id=<?php echo $row['id']; ?>" class="mask"><img class="img-responsive zoom-img" src="images/<?php echo $row['code']; ?>.jpg" alt="" /></a>
                                                                <div class="product-bottom">
                                                                        <h3><?php echo $row['name']; ?></h3>
                                                                        <p><?php echo $row['price']; ?> €</p>
                                                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price"><?php echo $row['discount']; ?> €</span></h4>
                                                                </div>
                                                                <div class="srch">
                                                                        <span>-60%</span>
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
                        </div>

                        <div class="sekcija" id="e3">
                            <h1>Zagreb Edition</h1>
                            <div class="product"> 
                                    <div class="container">
                                            <div class="product-top">
                                                <?php 
                                                    $st = 1;
                                                    foreach($zagreb as $row)
                                                    {
                                                ?>
                                                <div class="product-one">
                                                <div class="col-md-3 product-left" id="c<?php echo $st; $st++;?>">
                                                        <div class="product-main simpleCart_shelfItem">
                                                                <a href="single.php?id=<?php echo $row['id']; ?>" class="mask"><img class="img-responsive zoom-img" src="images/<?php echo $row['code']; ?>.jpg" alt="" /></a>
                                                                <div class="product-bottom">
                                                                        <h3><?php echo $row['name']; ?></h3>
                                                                        <p><?php echo $row['price']; ?> €</p>
                                                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price"><?php echo $row['discount']; ?> €</span></h4>
                                                                </div>
                                                                <div class="srch">
                                                                        <span>-60%</span>
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
                        </div>


                    </div>	
                    <form class="fixed">
                        <div class="w_sidebar ">
                            <section  class="sky-form ">
                                <h4>Edition</h4>
                                <div class="row1 scroll-pane">
                                    <div class="col col-4">
                                        <label class="checkbox"><input onclick="myFunction(false)" type="checkbox" name="edition0" id="fe0" checked="checked" ><i></i>All Editions</label>
                                    </div>
                                    <div class="col col-4">	
                                        
                                        <label class="checkbox"><input onclick="myFunction(true)" type="checkbox" name="edition3" id="fe1" ><i></i>Milno Edition</label>	
                                        <label class="checkbox"><input onclick="myFunction(true)" type="checkbox" name="edition2" id="fe2" ><i></i>Berlin Edition</label>	
                                        <label class="checkbox"><input onclick="myFunction(true)" type="checkbox" name="edition4" id="fe3" ><i></i>Zagreb Edition</label>	
                                    </div>
                                </div>
                            </section>
                            <section  class="sky-form">
                                <h4>Colour</h4>
                                <div class="row1 row2 scroll-pane">
                                    <div class="col col-4">
                                        <label class="checkbox"><input onclick="myFunction(false)" type="checkbox" name="colour0" id="fc0" checked="checked"><i></i>All Colours</label>
                                    </div>
                                    <div class="col col-4">
                                        <label class="checkbox"><input onclick="myFunction(true)" type="checkbox" name="colour1" id="fc1"><i></i>White</label>
                                        <label class="checkbox"><input onclick="myFunction(true)" type="checkbox" name="colour2" id="fc2"><i></i>Red</label>
                                        <label class="checkbox"><input onclick="myFunction(true)" type="checkbox" name="colour3" id="fc3"><i></i>Blue</label>
                                        <label class="checkbox"><input onclick="myFunction(true)" type="checkbox" name="colour4" id="fc4"><i></i>Black</label>
                                        <label class="checkbox"><input onclick="myFunction(true)" type="checkbox" name="colour5" id="fc5"><i></i>Gold</label>
                                        <label class="checkbox"><input onclick="myFunction(true)" type="checkbox" name="colour6" id="fc6"><i></i>Bronze</label>
                                        <label class="checkbox"><input onclick="myFunction(true)" type="checkbox" name="colour7" id="fc7"><i></i>Aluminium</label>							
                                    </div>
                                </div>  
                            </section>
                        </div>
                        <br>
                    </form>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--product-end-->


        <div id="footer"></div>


<script>
function myFunction(bol) {
    var x1 = document.getElementById("e1");
    var x2 = document.getElementById("e2");
    var x3 = document.getElementById("e3");
    
    var y1 = document.querySelectorAll("#c1");
    var y2 = document.querySelectorAll("#c2");
    var y3 = document.querySelectorAll("#c3");
    var y4 = document.querySelectorAll("#c4");
    var y5 = document.querySelectorAll("#c5");
    var y6 = document.querySelectorAll("#c6");
    var y7 = document.querySelectorAll("#c7");
    
    var fe0 = document.getElementById("fe0").checked;
    var fe1 = document.getElementById("fe1").checked;
    var fe2 = document.getElementById("fe2").checked;
    var fe3 = document.getElementById("fe3").checked;
    
    if ((fe1||fe2||fe3)&&bol) {    
        document.getElementById("fe0").checked = false;
        var fe0 = document.getElementById("fe0").checked;
    }
    else{
    document.getElementById("fe1").checked = false;
    document.getElementById("fe2").checked = false;
    document.getElementById("fe3").checked = false;     
    }
    
    var fc0 = document.getElementById("fc0").checked;
    var fc1 = document.getElementById("fc1").checked;
    var fc2 = document.getElementById("fc2").checked;
    var fc3 = document.getElementById("fc3").checked;
    var fc4 = document.getElementById("fc4").checked;
    var fc5 = document.getElementById("fc5").checked;
    var fc6 = document.getElementById("fc6").checked;
    var fc7 = document.getElementById("fc7").checked;
    
    
    if ((fc4||fc1||fc2||fc3||fc5||fc6||fc7)&&bol) {    
        document.getElementById("fc0").checked = false;
        var fc0 = document.getElementById("fc0").checked;
    }
    else{
    document.getElementById("fc1").checked = false;
    document.getElementById("fc2").checked = false;
    document.getElementById("fc3").checked = false;
    document.getElementById("fc4").checked = false; 
    document.getElementById("fc5").checked = false;
    document.getElementById("fc6").checked = false;
    document.getElementById("fc7").checked = false;      
    }
    
    x1.style.display = "none";
    x2.style.display = "none";
    x3.style.display = "none";
    
    
    y1.forEach(function(entry) {
        entry.style.display = "none";
    });
    y2.forEach(function(entry) {
        entry.style.display = "none";
    });
    y3.forEach(function(entry) {
        entry.style.display = "none";
    });
    y4.forEach(function(entry) {
        entry.style.display = "none";
    });
    y5.forEach(function(entry) {
        entry.style.display = "none";
    });
    y6.forEach(function(entry) {
        entry.style.display = "none";
    });
    y7.forEach(function(entry) {
        entry.style.display = "none";
    });
    
    if (fe0) {
        x1.style.display = "block";
        x2.style.display = "block";
        x3.style.display = "block";
    }
    if (fe1) {
        x1.style.display = "block";     
    }
    if (fe2) {
        x2.style.display = "block";
    }
    if (fe3) {
        x3.style.display = "block";
    }


    if (fc0) {
        y1.forEach(function(entry) {
            entry.style.display = "block";
        });
        y2.forEach(function(entry) {
            entry.style.display = "block";
        });
        y3.forEach(function(entry) {
            entry.style.display = "block";
        });
        y4.forEach(function(entry) {
            entry.style.display = "block";
        });
        y5.forEach(function(entry) {
            entry.style.display = "block";
        });
        y6.forEach(function(entry) {
            entry.style.display = "block";
        });
        y7.forEach(function(entry) {
            entry.style.display = "block";
        });
    }
    if (fc1) {
        y1.forEach(function(entry) {
            entry.style.display = "block";
        });
    }
    if (fc2) {
        y2.forEach(function(entry) {
            entry.style.display = "block";
        });
    }
    if (fc3) {
        y3.forEach(function(entry) {
            entry.style.display = "block";
        });
    }
    if (fc4) {
        y4.forEach(function(entry) {
            entry.style.display = "block";
        });
    }
    if (fc5) {
        y5.forEach(function(entry) {
            entry.style.display = "block";
        });
    }
    if (fc6) {
        y6.forEach(function(entry) {
            entry.style.display = "block";
        });
    }
    if (fc7) {
        y7.forEach(function(entry) {
            entry.style.display = "block";
        });
    }
}


</script>
    </body>
</html>