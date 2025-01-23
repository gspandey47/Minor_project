<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail Validation Form</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
   <style>
        body {
            margin: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mt-5">Gmail Validation Form</h2>
    <form id="emailForm">
        <div class="mb-3">
            <label for="email" class="form-label">Enter your Gmail address:</label>
            <input type="email" id="email" class="form-control" required>
            <div id="emailFeedback" class="invalid-feedback">
                Please enter a valid Gmail address.
            </div>
        </div>
        <button type="button" id="submitBtn" class="btn btn-primary" disabled>Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const emailInput = document.getElementById('email');
    const submitBtn = document.getElementById('submitBtn');
    const emailFeedback = document.getElementById('emailFeedback');

    emailInput.addEventListener('input', () => {
        const emailValue = emailInput.value.trim();
        // Check if the email ends with @gmail.com and is not empty
        if (emailValue.endsWith('@gmail.com') && emailValue.length > 10) {
            submitBtn.disabled = false;
            emailInput.classList.remove('is-invalid');
        } else {
            submitBtn.disabled = true;
            emailInput.classList.add('is-invalid');
        }
    });

    submitBtn.addEventListener('click', () => {
        if (!submitBtn.disabled) {
            // Redirect to another page
            window.location.href = 'reset.php'; // Change to your target URL
        }
    });
</script>

</body>
</html>
