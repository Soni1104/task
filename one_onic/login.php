<?php
    session_start();
    $conn=mysqli_connect("localhost","root","","task");
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from login where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if($result->num_rows==1)
    {
        $_SESSION['username']=$username;
        header("location:admin.php");
    }
    else
    {
        echo '<script>alert("dont login");</script>';
    }
}
?>