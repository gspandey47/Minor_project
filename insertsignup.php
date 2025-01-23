<?php

if(isset($_POST['submit'])){
    include 'config.php';

    $U_Name = $_POST['Uname'];
    $Email = $_POST['Email'];
    $MNO   = $_POST['mno'];
    $PassWord =$_POST['password'];
    

    // mysqli_query($con,"INSERT INTO `usertable`(`name`, `email`, `password`) VALUES ('$U_Name','$Email','$Email2')");
    // mysqli_query($con,"INSERT INTO `usertable`(`name`, `email`, `Mobile`) VALUES ('$U_Name','$Email','$MNO')");

    mysqli_query($con,"INSERT INTO `usertable`(`name`, `email`, `Mobile`, `password`) VALUES ('$U_Name','$Email','$MNO','$PassWord')");

}
?>