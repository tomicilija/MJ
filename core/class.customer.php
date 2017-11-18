<?php
class CUSTOMER
{
    private $db;

    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }

    public function create($email,$name,$surname,$address,$phone)
    {
       try
       {
           $statement = $this->db->prepare("INSERT INTO customers(email,name,surname,address,phone) VALUES(:cemail,:cname,:csurname,:caddress,:cphone)");

           $statement->bindparam(":cemail", $email);
           $statement->bindparam(":cname", $name);
           $statement->bindparam(":csurname", $surname);
           $statement->bindparam(":caddress", $address);
           $statement->bindparam(":cphone", $phone);
           $statement->execute();

           return $statement;
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    }
}
    
?>