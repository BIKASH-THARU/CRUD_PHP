<?php 
$host = "localhost";
$username="root";
$password= "";
$database="crud";

$conn = new mysqli($host,$username,$password,$database);

if($conn) {
   // echo "Database Connected";
}
else{
    echo "Database Not Connected";
}


?>