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
    }
    .a{
        /* background-color: #e62929; */
        height: 79px;
        
    }
</style>

</head>
<body>
    
    <form action="insertsignup.php" method="post" onsubmit="return validateForm()">
        <div class="container m-3 border border-primary shadow m-auto p-3 mt-3 rounded-2" id="main">
        <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-warning ">Signup</p>
        </div>

        <div class="mb-3  a">
            <label class="form-label">Name</label>
            <input type="text"  id="name" class="form-control" placeholder="Enter username" name="Uname">
            <span class="error" id="nameError"></span><br>
        </div>
        <div class="mb-3  a">
            <label class="form-label">Email</label>
            <input type="email" id="email" class="form-control" placeholder="Enter Email" name="Email">
            <span class="error" id="emailError"></span><br>
        </div>

        <div class="mb-3  a">
            <label class="form-label">Mobile</label>
            <input type="number_format" id="mobile" class="form-control" placeholder="Enter Mobile" name="mno">
            <span class="error" id="mobileError"></span><br>
        </div>
        <div class="mb-3  a">
            <label class="form-label">Password</label>
            
    <input type="password" id="password" class="form-control" placeholder="Enter Mobile" name="password">
    <span class="error" id="passwordError"></span><br>
</div>

       

    <button class="btn btn-primary  mb-3" name="submit">Submit</button>
    </div>
</form>



<script>
    function validateForm() {
        // Clear previous errors
        document.getElementById('nameError').textContent = '';
        document.getElementById('emailError').textContent = '';
        document.getElementById('mobileError').textContent = '';
        document.getElementById('passwordError').textContent = '';

        let isValid = true;

        // Name validation
        const name = document.getElementById('name').value;
        if (name.trim() === '') {
            document.getElementById('nameError').textContent = 'Name is required.';
            isValid = false;
        }

        // Email validation
        const email = document.getElementById('email').value;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            document.getElementById('emailError').textContent = 'Enter a valid email.';
            isValid = false;
        }

        // Mobile validation
        const mobile = document.getElementById('mobile').value;
        const mobilePattern = /^\d{10}$/; // Change to match your requirements
        if (!mobilePattern.test(mobile)) {
            document.getElementById('mobileError').textContent = 'Enter a valid 10-digit mobile number.';
            isValid = false;
        }

        // Password validation
        const password = document.getElementById('password').value;
        if (password.length < 6) {
            document.getElementById('passwordError').textContent = 'Password must be at least 6 characters long.';
            isValid = false;
        }

        return isValid; // Prevent form submission if validation fails
    }
    </script>

</body>
</html>