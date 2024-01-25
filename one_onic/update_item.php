<?php
    $conn=mysqli_connect("localhost","root","","task");
    $id=$_REQUEST['id'];
    $select="select * from commerce where id='$id'";
    $result=mysqli_query($conn,$select);
?>
<html>
    <head>
        <title>category</title>
    </head>
    <body>
        <form method="post" action="update.php"  enctype="multipart/form-data">
            <table>
                <?php
                    while($data=mysqli_fetch_assoc($result))
                    {
                ?>
            <tr>
                    <td>Id:</td>
                    <td><input type="text" name="id" value="<?php echo $data['id'];?>"></td>
                    </tr>
                    <tr>
                    <td>Image:</td>
                    <td><input type="file" name="image" value="<img src="..//phota/><?php echo $data['image'];?></td>
                    </tr>
                    <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"  value="<?php echo $data['name'];?>"></td>
                </tr>
                <tr>
                <td>Price:</td>
                <td><input type="text" name="price"  value="<?php echo $data['price'];?>"></td>
            </tr>
                <tr>
                    <td><input type="submit" value="Update"></td>
                </tr>
                <?php
                    }
                ?>
            </table>
            </form>
    </body>
</html>