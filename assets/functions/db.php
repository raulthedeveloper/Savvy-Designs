
<?php

error_reporting(0);

class databaseConnect
{
    // After connection is made check if you variables can become private
    public $servername;
    public $username;
    public $password;
    public $database;
    private $table;
    
    function __construct($servername, $username, $password, $database)
    {
        $this->servername = $servername;
        $this->username   = $username;
        $this->password   = $password;
        $this->database   = $database;
        
    }
    
    function setTable($table)
    {
        $this->table = $table;
    }
    



    // Table name is passed and boolean if routing with $_GET

    function makeQuery($router = false, $idType = null)
    {
        
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        
        
        // if (!$conn) {
        //     die("Connection failed: " . mysqli_connect_error());
        // }
        
        
        if ($router) {
           

            $ID = mysqli_real_escape_string($conn, $_GET['id']);
            
            $sql = "SELECT * FROM {$this->table} WHERE {$idType}='$ID' ";

            
            $result = mysqli_query($conn, $sql);
           
            return mysqli_fetch_array($result);
            
            
            
        } else {
            
            $sql = "SELECT * FROM {$this->table};";
            return mysqli_query($conn, $sql);
        }
        mysqli_close($conn);
        
    }
    
    
    // Methods that controls the routing of page
    
    function route($idType, $backupData)
    {

        
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        
        if (null !== $_GET['id']) {
            ////// Backup if database fails /////////
            if ($_GET['id'] == 'test') {
                // Return associative array
               
                return $backupData;
                
                
            } else {
                // resultArr is a string array
                $ID = mysqli_real_escape_string($conn, $_GET['id']);
              
                return $this->makeQuery($router = true, $idType);
                ;
                
            }
            
        }
        mysqli_close($conn);
    }
    
}

$db = new databaseConnect("localhost", "raultper_siabo", "P9!%gvrDTG%n", "raultper_savy_design");

$db->setTable("work_items");

$result = $db->makeQuery();

$row = mysqli_fetch_array($result);




?>
 