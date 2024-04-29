<?php
   if(isset($_REQUEST['nname']) || isset($_REQUEST['pass'])){
    echo "Hi my name is " . $_REQUEST['nname']. "and my password is ".$_REQUEST['pass'];
   }
?>


<html>
    <body>
        
    <form action="" method="POST">
    Name: <input type="text" name="nname"><br>
    Passowrd: <input type="text" name="pass"><br>
    <input type="submit" value="Submit">
</form>

    </body>
</html>