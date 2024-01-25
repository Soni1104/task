<?php
    $conn=mysqli_connect("localhost","root","","task");
    $id=$_REQUEST['id'];
    $image=$_FILES['image']['name'];
    $target="phota/".$image;
    $source=$_FILES['image']['tmp_name'];
    $move=move_uploaded_file($source,$target);
    $name=$_POST['name'];
    $price=$_POST['price'];
    $update="update commerce set image='$image',name='$name',price='$price' where id='$id'";
    $result=mysqli_query($conn,$update);
    if($result)
    {
        header("location:admin.php");
    }
    else
    {
        echo '<script>alert("dont update");</script>';
    }
?>