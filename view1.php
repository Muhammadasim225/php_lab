<?php 
include "config.php";
 $sql="SELECT * FROM `user`";
// $sopq = "ALTER TABLE `user` ADD `First Name` VARCHAR(200)";
// $sopqq = "UPDATE `user` SET `First Name`='Muhammad' WHERE `Last Name`='jsjjsjsjs'";
$eww=mysqli_query($x,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 950px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 7px;
            text-align: left;
            border-bottom: 1px solid #ddd;

        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #f9f9f9;
        }
        
        .btn {
            display: inline-block;
            padding: 8px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        .btnn{
            display: inline-block;
            padding: 8px 20px;
            background-color: #6e6e6e;
            color: #fff;
            margin-bottom:10px;
            text-decoration: none;
            border-radius: 4px;

            margin-left:420px;
            margin-bottom:30px;
        }
        .btnn:hover{
            background-color: #6e6e6e;

        }
 
        
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Information</h1>
        <a href='create.php' class="btnn">Create New</a>
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            if(mysqli_num_rows($eww) > 0) {
                while($fff = mysqli_fetch_assoc($eww)) {
                    echo "<tr>";
                    echo "<td>".$fff['id']."</td>";
                    echo "<td>".$fff['First Name']."</td>";
                    echo "<td>".$fff['Last Name']."</td>";
                    echo "<td>".$fff['Email']."</td>";
                    echo "<td>".$fff['Password']."</td>";
                    echo "<td>".$fff['Gender']."</td>";
                    echo "<td><a href='update.php?id=".$fff['id']."' class='btn'>Edit</a></td>";
                    echo "<td><a href='delete.php?id=".$fff['id']."' class='btn'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No data available</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
