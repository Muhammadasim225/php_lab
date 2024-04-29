<?php 
$servername="localhost";
$username="root";
$password="";
$database="crud";

$x=mysqli_connect($servername,$username,$password,$database);
if(!$x){
   die("Error on connecting ".mysqli_connect_error($x));
}
else{
    echo "Connected successfully <br>";
}

?>