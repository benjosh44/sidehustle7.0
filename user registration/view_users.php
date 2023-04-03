<?php

    include ("session.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Users</title>
</head>
<body>

    

<table border = "2">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>
        </thead>
        
        <tbody>
        <?php
    
            include("database.php");

            $qall = "SELECT * FROM userreg";
            $exec = mysqli_query($conn, $qall);

            while($row = mysqli_fetch_assoc($exec)){
        ?>
        <tr>
            <td><?=$row['firstname'];?></td>
            <td><?=$row['lastname'];?></td>
            <td><?=$row['username'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['gender'];?></td>
            <input type="hidden" value="<?=$row['id'];?>">
        </tr>
        <?php } ?>
        </tbody>
        
    </table>

    <p><a href="logout.php">Logout</a></p>
    
</body>
</html>