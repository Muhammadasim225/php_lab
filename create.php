
<?php 

include "config.php";
$firstname='';
$lastname='';
$password='';
$gender='';
$email='';

if(isset($_POST['SUBMIT'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
}
if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) && !empty($gender)) {
    // Insert data into database
    $sql = "INSERT INTO `user` (`First Name`, `Last Name`, `Email`, `Password`, `Gender`) VALUES ('$firstname', '$lastname', '$email', '$password', '$gender')";
    $qawer = mysqli_query($x, $sql);
    
    if($qawer){
        echo "Inserted successfully";
        header("Location: view1.php"); 


    } else {
        echo "Error in insertion";
    }
} else {
    echo "All fields are required";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            width: 300px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 12px);
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            margin-left:100px;
            margin-top:10px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="Firstname">Firstname: </label>
        <input type="text" name="firstname" id="first" required><br>
        <label for="Lastname" required>Lastname: </label>
        <input type="text" name="lastname" id="second" required><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required><br>
        <label for="Password">Password: </label>
        <input type="password" name="password" id="pass" required><br>
        <label for="gender">Gender: </label>
        <input type="radio" name="gender" id="gender" value="Male">Male
        <input type="radio" name="gender" id="gender" value="Female">Female 
        <br>
        <input type="submit" value="submit" name="SUBMIT">




    </form>
</body>
</html>
