<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

<h3>User Resgistration Form</h3>

    <form method="post" action="process.php">

        <label>First Name</label>
        <input type="text" name="fname" id="fname" required><br><br>

        <label>Last Name</label>
        <input type="text" name="lname" id="lname" required><br><br>

        <label>UserName</label>
        <input type="text" name="uname" id="uname" required><br><br>

        <label>Email</label>
        <input type="email" name="email" id="email" required><br><br>

        <label>Gender</label>
        <select name="gender" id="gender" required>
            <option value="">-- Select Gender --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
            <option value="nosay">Prefer Not to Say</option>
 
        </select> <br><br>

        <label>Password</label>
        <input type="password" name="pass" id="pass" required><br><br>

        <label>Confirm Password</label>
        <input type="password" name="cpass" id="cpass" required><br><br>
        

        <input type="submit" value="Register" name="reguser">

    </form>

    <p>Already have an Account? Login <a href="login.php">Here</a></p>
    
</body>
</html>