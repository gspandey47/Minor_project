<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">

    <style>
        .error{
            color: red;
            margin-bottom: 10px;
            font-size: 0.9em;  
        }
    </style>
</head>
<body>
    <form action="logininsert.php" method="post" onsubmit="return validateForm()" >
        <div class="container border border-primary shadow m-auto p-3 mt-3 rounded-2">
        <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-warning ">Login
                <b class="text-primary fw-light">to your account?</b><a href="signup.php" class="text-dark">signup</a>
            </p>
        </div>

        
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control"id="email" placeholder="Enter Email" name="Email">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Enter password" name="password">
            <p>'Password must be at least 8 characters long one uppercase letter one lowercase one digit and a special character'</p>
        </div>

       
        <div class="error" id="error-message"></div>
        <span><a href="forget.php">ForgetPassword</a></span>
    <button class="btn btn-primary mb-3 " name="submit">Login</button>
    </div>
</form>


<script>
        function validateForm() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('error-message');
            errorMessage.textContent = '';

            // Email validation
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                errorMessage.textContent += 'Please enter a valid email address.\n';
                alert("submit kro");
                return false;
            }

            // Password validation
            if (password.length < 8) {
                errorMessage.textContent += 'Password must be at least 8 characters long.\n';
            }
            if (!/[A-Z]/.test(password)) {
                errorMessage.textContent += 'Password must contain at least one uppercase letter.\n';
            }
            if (!/[a-z]/.test(password)) {
                errorMessage.textContent += 'Password must contain at least one lowercase letter.\n';
            }
            if (!/[0-9]/.test(password)) {
                errorMessage.textContent += 'Password must contain at least one digit.\n';
            }
            if (!/[!@#$%^&*]/.test(password)) {
                errorMessage.textContent += 'Password must contain at least one special character (!@#$%^&*).\n';
            }

            if (errorMessage.textContent !== '') {
                return false; // Prevent form submission if there are errors
            }

            // If validation passes
            alert('Login successful!');
            return true; // Allow form submission (or replace with your login logic)
        }
    </script>

</body>
</html>