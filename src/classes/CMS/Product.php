<?php
namespace OPS\CMS;                                   // Namespace declaration

class Product
{
    protected $db;                                       // Holds ref to Database object

    public function __construct(Database $db)
    {
        $this->db = $db;                                 // Add ref to Database object
    }

    // Get summaries of articles
    public function getAll(): array
    {
        
      $sql = "SELECT * FROM ops.product;";

      return $this->db->runSQL($sql)->fetchAll(); // Return data
    }

    public function update($arguments = [])
    {
      $fields = $arguments;
      unset($fields["id"]);

      try {                      
        $sql = ' UPDATE `' . 'product' .'` SET ';
        foreach ($fields as $key => $value) {
          $sql .= '`' . $key . '` = :' . $key . ',';
        }
        $sql = rtrim($sql, ',');
        $sql .= ' WHERE `' . 'id' . '` = :id';

        $this->db->runSQL($sql, $arguments);                     
        return true;      

      } catch (\PDOException $e) {                                 
          // throw $e;              
          return false;                                  
      }

    }

    public function create($arguments = []): bool
    {      
      if(isset($arguments['t'])) unset($arguments['t']);

      try {                                                        
        $sql = 'INSERT INTO `' . 'product' . '` (';

        foreach ($arguments as $key => $value) {
          $sql .= '`' . $key . '`,';
        }
        
        $sql = rtrim($sql, ',');
        $sql .= ') VALUES (';
        
        foreach ($arguments as $key => $value) {
          $sql .= ':' . $key . ',';
        }
        
        $sql = rtrim($sql, ',');
        $sql .= ')';

        // var_dump($sql);

        $this->db->runSQL($sql, $arguments);                     
        return true;                                               
      } catch (\PDOException $e) {                                 
        if ($e->errorInfo[1] === 1062) {                         
            return false;                                        
        }                                                        
        throw $e;                                                
      }
    }

    public function delete($id): bool{
      try {                                                        
        $sql = "DELETE FROM `product` WHERE id = :id;";                    
        // var_dump($sql);

        $this->db->runSQL($sql, [$id]);                            
        return true;                                               
      } catch (\PDOException $e) {                                                    
        throw $e;                                              
      }    
    }

}