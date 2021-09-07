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
    <h2>Create User</h2>
    <form action="create.php" method="POST">
        <input type="text" name="firstName" id="firstName" placeholder="Enter firstName">
        <input type="text" name="lastName" id="lastName" placeholder="Enter LastName"><input type="text" name="email" id="email" placeholder="email"><input type="text" name="password" id="password" placeholder="password">
        <select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>

        </select>
        <select name="accessRole" id="accessRole">
            <option value="">Select Role</option>
            <option value="Client">Client</option>
            <option value="Admin">Admin</option>
        </select>
        <input type="submit" value="Submit" name="Submit">

    </form>
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
                <td><?php echo $row['First_Name']; ?></td>
                <td><?php echo $row['Middle_Name']; ?></td>
                <td><?php echo $row['Last_Name']; ?></td>

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