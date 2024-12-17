<?php
session_start();
include("includes/connection.php");
if(isset($_POST['email']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $result=mysqli_query($conn,"select * from users where email='$email' and password='$password'");
    if(mysqli_num_rows($result)==1)
    {
        $user=mysqli_fetch_array($result);
        $_SESSION['name']=$user['name'];
        $_SESSION['role']=$user['role'];
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    <title>Novelle Clothing - Login</title>
</head>
<body>
    <section class="login-form">
        <form id="loginForm" action="login.php" method="POST" onsubmit="return validateForm()">
            <h2>Login</h2>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Login</button>
        </form>        
    </section>

    <script>
        //  validate the form
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            // Email validation 
            if (!email) {
                alert("Email is required!");
                return false;
            }

            // Password validation 
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            if (!passwordRegex.test(password)) {
                alert("Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one number, and one special character.");
                return false;
            }

            // If password is valid, redirect to homepage.html
            window.location.href = "homepage.html";
            return false; 
    </script>
</body>
</html>
