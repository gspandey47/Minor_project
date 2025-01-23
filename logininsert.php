<?php

if(isset($_POST['submit'])){
    include 'config.php';

   $Email =$_POST['Email'];
   $PassWord =$_POST['password'];
    
mysqli_query($con,"INSERT INTO `login`(`email`, `password`) VALUES ('$Email','$PassWord' )");
   


}
?>

<!-- fetching data -->