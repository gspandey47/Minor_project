<?php
$con = mysqli_connect('localhost','root','','phpadmin');

$A_email=$_POST['email'];
$A_pass=$_POST['password'];




$result = mysqli_query($con," SELECT * FROM `admin` WHERE email='$A_email' AND  password= '$A_pass' ");

session_start();

if(mysqli_num_rows($result))
{
    $_SESSION['admin'] = $A_email;
    echo "
        <script>
        alert('Login succes fully');
        window.location.href='panel.php';
        </script>
    ";
}
else{

    echo "
    <script>
    alert('invalid username or password');
    window.location.href='adminlogin.php';
    </script>
";
}





?>