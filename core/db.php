<?php
ob_start();
session_start();
$cart=array();
$_SESSION['cart']=$cart;

/* mysql hostname */
$hostname = 'localhost';

/* mysql database name */
$dbname = 'mj';

/* mysql username */
$username = 'root';

/* mysql password */
$password = '';

try
{
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname;", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec("set names utf8");
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

include_once 'class.customer.php';
$customer = new CUSTOMER($dbh);

include_once 'class.article.php';
$article = new ARTICLE($dbh);

include_once 'class.transaction.php';
$transaction = new TRANSACTION($dbh);

?>
