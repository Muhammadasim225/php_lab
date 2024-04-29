<?php
include "config.php";

if(isset($_GET['id'])){
    $user_id=$_GET['id'];

    $sql="DELETE FROM `user` WHERE `id`='$user_id'";
    $res=mysqli_query($x,$sql);
    if($res){
        echo "Successfully deleted!!!!!";
        header("Location: view1.php");

        echo "<br>";
    }
    else{
        echo "ERROR IN DELETING";
        echo "<br>";
    }
}

?>