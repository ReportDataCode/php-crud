<?php
require("retrieve.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEF Company</title>
</head>
<body>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Access Role</th>
            <th>Actions</th>
        </tr>
        <?php
        
        while ($row = mysqli_fetch_array($sqlUser)) { 
            ?>
            <tr>
                <td>User 1</td>
                <td>User Last</td>
                <td>User Past</td>
                <td>User Email</td>
                <td>User gender</td>
                <td>User role</td>
                <td>Actions</td>
                </tr>
        <?php    
        }
        ?>
        
    </table>
</body>
</html>