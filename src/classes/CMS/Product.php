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

}