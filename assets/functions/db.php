<?php


$servername = "localhost";
$username = "raultper_siabo";
$password = "P9!%gvrDTG%n";
$database = "raultper_savy_design";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM work_items";
$result = mysqli_query($conn, $sql);






class databaseConnect {
// After connection is made check if you variables can become private
  public $servername;
  public $username;
  public $password;
  public $database;

 function __construct($servername,$username,$password,$database){
   $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;
    
 }
 

// Table name is passed and boolean if routing with $_GET
 function makeQuery($table,$router = false,$where = null, $row = null){


  $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

    echo "connection successful \n";

  if($router){

    // $ID = mysqli_real_escape_string($conn, $_GET['id']);

    // // Possible error//////////
    // $sql = "SELECT * FROM $table WHERE $where = $ID ";

    // $result = mysqli_query($conn, $sql) or die();

    // $row = mysqli_fetch_array($result);

    echo 'router is running';
    foreach($row as $element){
      echo $element;
    };


  }else{  
      $sql = "SELECT * FROM . $table";
      return  mysqli_query($conn, $sql);
  }

 

    
 }

 function route($stringArr="default",$resultArr=null,$backupArr=null){
  $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

  if(null !== $_GET['id']){
  ////// Backup if database fails /////////
    if($_GET['id'] == 'test'){
      // Return associative array
      return $backupArr;
        
  
    }else{
      // resultArr is a string array
          $ID = mysqli_real_escape_string($conn, $_GET['id']);

          return  $this->makeQuery($router = true, $row = $resultArr); ;
          
            }

}
 }
}

$db = new databaseConnect("localhost","raultper_siabo","P9!%gvrDTG%n","raultper_savy_design");

$result = $db->makeQuery("work_items");
$row = mysqli_fetch_array($result);

echo $row['work_title'];

?>