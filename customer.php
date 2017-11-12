<?php
include_once 'core/db.php';

if(isset($_POST['customer_email']) && isset($_POST['customer_name']) && isset($_POST['customer_surname']) && isset($_POST['customer_address']) && isset($_POST['customer_phone']))
{
    
    $email = trim($_POST['customer_email']);
    $name = trim($_POST['customer_name']);
    $surname = trim($_POST['customer_surname']);
    $address = trim($_POST['customer_address']);
    $phone = trim($_POST['customer_phone']);
    
    try{
        if($customer->create($email,$name,$surname,$address,$phone))
            {
                header("Location: step2.php");
            }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}else{
    echo 'rogue2!';
}

?>