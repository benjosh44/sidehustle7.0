<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    

<h3>User Login</h3>

<form method="post" action="process.php">

    <label>Email</label>
    <input type="email" name="email" id="email" required><br><br>

    <label>Password</label>
    <input type="password" name="pass" id="pass" required><br><br>

    <input type="submit" value="Login" name="login">

</form>

<p>Don't have an Account yet? Click <a href="login.php">Here</a> to Register</p>



</body>
</html>