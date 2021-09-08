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
        <input type="text" name="First_Name" id="First_Name" placeholder="Enter firstName">
        <input type="text" name="Middle_Name" id="Middle_Name" placeholder="Enter MiddleName">
        <input type="text" name="Last_Name" id="LastName" placeholder="Enter LastName">
        <input type="text" name="email" id="email" placeholder="email">
        <input type="password" name="password" id="password" placeholder="password">
        
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
            <th>LRN</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Access Role</th>
        </tr>
        <?php

        while ($row = mysqli_fetch_array($sqlUser)) {
        ?>
            <tr>
                <td><?php echo $row['Learner_Reference_Number']; ?></td>
                <td><?php echo $row['First_Name']; ?></td>
                <td><?php echo $row['Middle_Name']; ?></td>
                <td><?php echo $row['Last_Name']; ?></td>
                <td><?php echo $row['Age']; ?></td>
                <td><?php echo $row['Gender']; ?></td>
                

                <td><?php echo $row['Access_Role'] ?></td>
                <!-- <td>User Last</td>
                <td>User Past</td>
                <td>User Email</td>
                <td>User gender</td>
                <td>User role</td>
                <td>Actions</td> -->
            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>