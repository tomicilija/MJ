<?php
class ARTICLE
{
    private $db;

    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
    
    public function create($name, $description,$price,$category,$images)
    {
       try
       {
           $statement = $this->db->prepare("INSERT INTO articles(name,description,price,category,images) VALUES(:aname,adescription,aprice,acategory,images)");

           $statement->bindparam(":aname", $email);
           $statement->bindparam(":adescription", $name);
           $statement->bindparam(":aprice", $surname);
           $statement->bindparam(":acategory", $address);
           $statement->bindparam(":aimages", $images);
           $statement->execute();

           return $statement;
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    }
    
    public function get($id)
    {
            $sql = "SELECT * FROM articles WHERE id=$id LIMIT 1";
            
            try{
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $thisarticle=$stmt->fetch(PDO::FETCH_ASSOC);
                return $thisarticle;
                
            }catch(PDOException $e){
                echo $e->getMessage();
            }
    }
    
    public function index($category)
    {
        
        if($category==0){
            $sql = "SELECT * FROM articles";
        }elseif($category==1){
            $sql = "SELECT * FROM articles WHERE category=1";
        }elseif($category==2){
            $sql = "SELECT * FROM articles WHERE category=2";
        }
            
            try{
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $albums=$stmt->fetchAll(PDO::FETCH_ASSOC);
                return $articles;
                
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            
            
    }

}
    
?>