<?php
class TRANSACTION
{
    private $db;

    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
    
    public function create($customer, $article, $quantity, $status)
    {
           try
           {
               $statement = $this->db->prepare("INSERT INTO transactions(customer_id, article_id, quantity, status) VALUES(:customer,:article,:quantity,:status)");

               $statement->bindparam(":customer", $customer);
               $statement->bindparam(":article", $article);
               $statement->bindparam(":quantity", $quantity);
               $statement->bindparam(":status", $status);
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