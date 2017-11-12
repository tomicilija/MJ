<?php
class CUSTOMER
{
    private $db;

    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }

    public function create($email,$name,$surname,$gender,$address,$phone,$birthday)
    {
       try
       {
           $statement = $this->db->prepare("INSERT INTO customers(email,name,surname,gender,address,phone,birthday) VALUES(:cemail,:cname,:csurname,:cgender,:caddress,:cphone,:cbirthday)");

           $statement->bindparam(":cemail", $email);
           $statement->bindparam(":cname", $name);
           $statement->bindparam(":csurname", $surname);
           $statement->bindparam(":cgender", $gender);
           $statement->bindparam(":caddress", $address);
           $statement->bindparam(":cphone", $phone);
           $statement->bindparam(":cbirthday", $birthday);
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