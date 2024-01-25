<?php
    $conn=mysqli_connect("localhost","root","","task");
    $select="select * from commerce";
    $result=mysqli_query($conn,$select);
?>
<html>
    <head>
        <title>admin</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Image</td>
            <td>Name</td>
            <td>Price</td>
            <td colspan="2">Action</td>
</tr>
<?php
while($data=mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $data['id'];?></td>
    <td><img src="phota/<?php echo $data['image'];?>"    height="100"></td>
    <td><?php echo $data['name'];?></td>
    <td><?php echo $data['price'];?></td>
    <td><a href="delete.php?id=<?php echo $data['id'];?>">delete</a></td>
    <td><a href="update_item.php?id=<?php echo $data['id'];?>">update</a></td>
</tr>
<?php
}
?>
<tr>
    <td><button><a href="logout.php">logout</a></button></td>
</tr>
</table>
</body>
</html>