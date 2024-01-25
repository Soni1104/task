<?php
    $conn=mysqli_connect("localhost","root","","task");
    $image=$_FILES['image']['name'];
    $target="phota/".$image;
    $source=$_FILES['image']['tmp_name'];
    $move=move_uploaded_file($source,$target);
    $name=$_POST['name'];
    $price=$_POST['price'];
    $insert="insert into commerce(`image`,`name`,`price`) values('$image','$name','$price')";
    $result=mysqli_query($conn,$insert);
    if($result)
    {
        header("location:admin.php");
    }
    else
    {
        echo '<script>alert("dont insert");</script>';
    }
?>