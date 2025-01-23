<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
    <form action="confirmAdmin.php" method="post" class="m-3"  >
        <div class="container border border-primary shadow m-auto p-3 mt-3 rounded-2">
        <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-warning ">Login
                <br><span class="text-dark">if You are admin then login </span>
            </p>
        </div>

        
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control"id="email" placeholder="Enter Email" name="email">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Enter password" name="password">
            
        </div>
        <button class="btn btn-primary" name="submit" id="submit">Login</button>
</body>
</html>