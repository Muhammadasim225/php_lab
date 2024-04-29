<?php
include "config.php";
$firstname='';
$lastname='';
$password='';
$gender='';
$email='';
$user_id='';

if(isset($_POST['update'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $user_id=$_POST['user_id'];
    $sql = "UPDATE `user` SET `First Name`='$firstname', `Last Name`='$lastname', `Email`='$email', `Password`='$password', `Gender`='$gender' WHERE `id`='$user_id'";

$ikek=mysqli_query($x,$sql);
if($ikek){
    header("Location: view1.php"); // Redirect here
    exit();
}
else{
  echo "Error on updating the data";
  echo "<br>";
}
}
if(isset($_GET['id'])){
    $user_id=$_GET['id'];
    $sql = "SELECT * FROM `user` WHERE `id`='$user_id'";
    $ssa = mysqli_query($x, $sql);
    $epq = mysqli_num_rows($ssa);

    if($epq > 0){
        while($fff = mysqli_fetch_assoc($ssa)){
            $firstname = $fff['First Name'];
            $lastname = $fff['Last Name'];
            $email = $fff['Email'];
            $password = $fff['Password'];
            $gender = $fff['Gender'];
        }
    }
}
else{
    echo "Error on displaying the data";
}

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
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <label for="Firstname">Firstname: </label>
    <input type="text" name="firstname" id="first" value="<?php echo $firstname; ?>"><br>
    <label for="Lastname" required>Lastname: </label>
    <input type="text" name="lastname" id="second" required value="<?php echo $lastname; ?>"><br>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" value="<?php echo $email; ?>" required><br>
    <label for="Password">Password: </label>
    <input type="password" name="password" id="pass" value="<?php echo $password; ?>" required><br>
    <label for="gender">Gender: </label>
    <input type="radio" name="gender" id="gender_male" value="Male" <?php if ($gender == 'Male') { echo "checked"; } ?>>Male
    <input type="radio" name="gender" id="gender_female" value="Female" <?php if ($gender == 'Female') { echo "checked"; } ?>>Female
    <br>
    <input type="submit" value="submit" name="update">
</form>
</body>
</html>
