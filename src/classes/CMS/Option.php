<?php
namespace OPS\CMS;                                   // Namespace declaration

/**
 * Option Table has only two fields
 * id   - PK
 * name - string
 */

class Option
{
    protected $db;                                       // Holds ref to Database object

    public function __construct(Database $db)
    {
        $this->db = $db;                                 // Add ref to Database object
    }

    public function getAll($table): array
    {
      $sql = "SELECT id, name FROM $table;";
      return $this->db->runSQL($sql)->fetchAll();
    }

    public function getByName($table, $name){
      try {                                                           // Try to find option by id
        $sql = "SELECT id FROM $table WHERE name = :name;";           // SQL   
        $option_id = $this->db->runSQL($sql, [$name])->fetchColumn();                // Run SQL
        return $option_id ?? false;
      } catch (\PDOException $e) {                                    // If PDOException throw exception
          throw $e;                                                 
      }
    }

    public function create($table, $name): bool
    {      
      try {                                                        // Try to add member 
        if($this->getByName($table, $name)) return false;          // If there has same name        
        $sql = "INSERT INTO $table (name) VALUES (:name);";        // SQL to add option         
        $this->db->runSQL($sql, [$name]);                          // Run SQL
        return true;                                               // Return true
      } catch (\PDOException $e) {                                 // If PDOException thrown
          if ($e->errorInfo[1] === 1062) {                         // If error indicates duplicate entry
              return false;                                        // Return false to indicate duplicate name
          }                                                        // Otherwise
          throw $e;                                                // Re-throw exception
      }
    }

    public function delete($table, $id): bool{
      try {                                                        // Try to delete option 
        $sql = "DELETE FROM $table WHERE id = :id;";                    // SQL to delete option
        $this->db->runSQL($sql, [$id]);                            // Run SQL
        return true;                                               // Return true
      } catch (\PDOException $e) {                                                    
        throw $e;                                              
      }    
    }

    public function update($table, $id, $name): bool{
      try {                                                        // Try to delete option 
        $sql = "UPDATE $table SET name = :name WHERE id = :id;";   // SQL to delete option
        $this->db->runSQL($sql, ["id" => $id, "name" => $name]);       // Run SQL
        return true;                                               // Return true
      } catch (\PDOException $e) {                                                    
        throw $e;                                              
      }    
    }
}