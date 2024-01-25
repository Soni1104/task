<?php
    $conn=mysqli_connect("localhost","root","","task");
    $id=$_REQUEST['id'];
    $select="delete from commerce  where id='$id'";
    $result=mysqli_query($conn,$select);
    if($result)
    {
        header("location:admin.php");
    }
    else
    {
        echo '<script>alert("dont delete");</script>';
    }
?>