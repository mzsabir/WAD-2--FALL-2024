<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regs.css">
    <title>Novelle Clothing - Registration</title>
</head>
<body>

    <section class="reg-form">
        <form id="registrationForm" onsubmit="return validateForm()">
            <h2>Registration</h2>

          
            <label for="username">Username:</label>
            <input type="username" id="username" name="username" required>
            <br>
     
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>

           
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>

            
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <br>

            <button type="submit">Register</button>
        </form>

        <p style="margin-top: 10px; text-align: center;">
            Already registered? <a href="login.html">Login</a>
        </p>
    </section>

    <script>
        //  to validate the form
        function validateForm() {
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirm-password').value;

            // Username validation
            var usernameRegex = /^[A-Za-z_-]+$/;
            if (!usernameRegex.test(username)) {
                alert("Username should only contain letters, underscores, and dashes.");
                return false;
            }

            // Password validation 
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            if (!passwordRegex.test(password)) {
                alert("Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one number, and one special character.");
                return false;
            }

            // Confirm password validation
            if (password !== confirmPassword) {
                alert("Password and Confirm Password do not match.");
                return false;
            }

            // If all validations pass, redirect to homepage.html
            window.location.href = "homepage.html";
            return false;  
        }
    </script>

</body>
</html>

            