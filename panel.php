<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">   
</head>
<?php 
  session_start();
  if(!$_SESSION['admin']){
    header("location:adminlogin.php");
  }
?>


<body>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid d-flex justify-content-between align-content-center">
    <a class="navbar-brand" href="#"><img src="../thehindu-logo.svg"alt="" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" " id="navbarScroll">
      <ul  class="d-flex list-unstyled gap-5 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
         Hello <?php 
          echo $_SESSION['admin'];
          ?>  
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
             <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="Adminlogout.php">Logout</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white fw-bold">UserPanel</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
    <div>
        <h1 class="text-center">Dashbord</h1>
    </div>

    <div class=" bg-dark d-flex justify-content-center col-6 m-auto rounded-2">
    
    
        <!-- <button class="btn btn-primary p-2 m-3"><a href="" class="text-decoration-none text-white">Addpost</a></button> -->
        <button class="btn btn-primary p-2 m-3"><a href="users.php" class="text-decoration-none text-white">Users</a></button>
    </div>
</body>
</html>