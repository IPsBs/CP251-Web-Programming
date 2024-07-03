<!-- หน้า login -->
<?php
session_start();
include ("server.php");


$username = "";
$password = "";


if (isset($_POST['login_user'])) 
{
    
    if (isset($_POST["user"])) {

        $username = trim($_POST["user"]); 
    }
       
    if (isset($_POST["pass"])) 
    {
        $password = trim($_POST["pass"]);
        $password = ($password);    
    }

     
     $sql_check = "SELECT * from user WHERE username = '$username' and password = '$password'"; 
        
     
     $result = mysqli_query($conn, $sql_check); 
        

    if (mysqli_num_rows($result) == 1) 
    {
        $row = mysqli_fetch_array($result); 
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        
    
        if ($_SESSION['role'] == 'admin') 
        {
            header("Location: ./admin_page.php"); 
        }

        if ($_SESSION['role'] == 'user') 
        {
            header("Location: ./user_page.php"); 
        }
    }

    else 
    {
        echo "<script>alert('Incorrect Username or Password found');</script>";  
    }

    if ((strcmp($username, strrev($password)) == 0))
    {
        $_SESSION['username'] = $username;        
        exit;
    }

   
}

  
if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    unset($_SESSION['role']); 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="./css/login_style.css">
   
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" >

        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="user" placeholder="Enter Your Username" required value="<?php 
            
                if(!isset($_SESSION['username'])) 
                {
                    echo $username;
                }
                
                else
                {
                    echo $_SESSION['username'];
                } ?>"
            >
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="pass" placeholder="Enter Your Password" required>
        </div>

        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
    </form>
</body>

</html>