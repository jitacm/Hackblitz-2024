<?php
ob_start();
require('db_connection.php');
 session_start();

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>Login page</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form >
                <h1>Create Account</h1>
                <div class="social-icons">
                    <!-- <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a> -->
                </div>
                <!-- <span>or use your email for registeration</span> -->
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form id="loginForm">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <!-- <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a> -->
                    <!-- <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a> -->
                </div>
                <!-- <span>or use your email password</span> -->
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button  id="login">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
     <?php
    function input_filter($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if(isset($_POST['Login'])){
        $email = input_filter($_POST['email']);
        $password = $_POST['password'];
       $email  =  mysqli_real_escape_string($connection,$email);
       $password  =  mysqli_real_escape_string($connection,$password);
       $query = "SELECT * FROM `login` WHERE `email`=? AND `password`=?";
       if($stmt = mysqli_prepare($connection,$query)){
     mysqli_stmt_bind_param($stmt,"ss",$email,$password);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_store_result($stmt);
     if(mysqli_stmt_num_rows($stmt)==1){
        $_SESSION['AdminLoginId']=$email;

        header("location: index.html");
        ob_end_flush();
     }
     else{
        echo "<script>alert('Invalid User Name or Password')</script> ";
     }
          mysqli_stmt_close($stmt);
       }else{

        echo "SQL qurey is not prepared";
       }
    }
    ?>

    <script src="script1.js"></script>
</body>

</html>