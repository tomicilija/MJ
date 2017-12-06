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
           $statement = $this->db->prepare("INSERT INTO articles(name,description,price,category,images) VALUES(:aname,:adescription,:aprice,:acategory,:aimages)");

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
                $articles=$stmt->fetchAll(PDO::FETCH_ASSOC);
                return $articles;
                
            }catch(PDOException $e){
                echo $e->getMessage();
            }     
    }
        
    public function getEdition($edition, $cat)
    {
            $sql = "SELECT * FROM articles WHERE name LIKE '$edition%' AND category = $cat";
            
            try{
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $articles=$stmt->fetchAll(PDO::FETCH_ASSOC);
                return $articles;
                
            }catch(PDOException $e){
                echo $e->getMessage();
            }    
    }
        
    public function getFeatured()
    {
            $sql = "SELECT * FROM articles WHERE code = 'TieR-Bk' OR code = 'TieR-A' OR"
                    . " code = 'TieBa-R' OR code = 'TieM-W' OR code = 'TieP-Br' OR "
                    . "code = 'TieLo-Be' OR code = 'BowTieZ-Bk' OR code = 'BowTieM-R'";
            
            try{
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $articles=$stmt->fetchAll(PDO::FETCH_ASSOC);
                return $articles;
                
            }catch(PDOException $e){
                echo $e->getMessage();
            }    
    }
        
    public function getCartPrice($CartArray)
    {
        $sumPrice = 0;
        foreach ($CartArray as $el)
        {
            $multiplier = $el[1]; 
            $sql = "SELECT price FROM articles WHERE id =$el";
            try{
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $thisarticle=$stmt->fetch(PDO::FETCH_ASSOC);
                $sumPrice = $sumPrice + (reset($thisarticle)* $multiplier);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            
        }
        return $sumPrice;
                
    }
}
    
?>