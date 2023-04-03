<?php
session_start();

include ("database.php");
    

    //REGISTER USER
    if(isset($_POST['reguser'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];


        if($pass !== $cpass){
            exit("<p>Password and Confirm Password must Match <br> Try <a href='index.php'>Again</a></p>");
        } 
        
        else{

            $quname = "SELECT * FROM userreg WHERE username = '$uname'";
            $uname_exist = mysqli_query($conn, $quname);
    
            if(mysqli_num_rows($uname_exist) > 0){
                exit("<h3>Username Already Exit</h3><p>Try <a href='index.php'>Another UserName</a></p>");
            } 
            else {
                $qemail = "SELECT * FROM userreg WHERE email = '$email'";
                $email_exist = mysqli_query($conn, $qemail);

                if(mysqli_num_rows($email_exist) > 0){
                    exit("<h3>Email Already Exit</h3><p>Login <a href='Login.php'>Here</a></p><p>Use <a href='index.php'>Another Email</a></p>");
                }
                else{

                    $realpass = md5($cpass);

                    //$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
                    $qinsert="INSERT INTO userreg (firstname, lastname, username, email, gender, password) VALUES ('$fname', '$lname', '$uname', '$email', '$gender', '$realpass')";
                    
                    $insert_user = mysqli_query($conn, $qinsert);

                    if($insert_user){
                        echo "<script>User Registered Succesfully</script>";
                    }

                    header("Location: view_users.php");
                    exit();
                }
            }

            

    
            
        }






    }




    //LOGIN USER
    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $pass = $_POST['pass'];

            $qemail = "SELECT * FROM userreg WHERE email = '$email'";
            $email_exist = mysqli_query($conn, $qemail);
    
            if(mysqli_num_rows($email_exist) < 1){
                exit("<h3>No user found with this email</h3><p>Register <a href='index.php'>Here</a></p>");
            } 
            else {

                $row = mysqli_fetch_assoc($email_exist);

                if(md5($pass) !== $row['password']){
                    exit("<h3>Password not correct</h3><p>Try <a href='login.php'>Again</a></p>");
                }
                else{
                    $_SESSION['login'] = true;
                    $_SESSION['id'] = $row['id'];

                    header("Location: view_users.php");
                }

            }
    }
    
?>