<?php

include_once 'core/db.php';

if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}

$id=$_POST['id'];
$qua = $_POST['quantity'];
$cart=$_SESSION['cart'];
array_push($cart,$id,$qua);
$_SESSION['cart']=$cart;
header('Location: single.php?id='.$id.'&a=1');
?>