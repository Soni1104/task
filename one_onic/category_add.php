<html>
    <head>
        <title>category</title>
    </head>
    <body>
        <form method="post" action="insert.php" onsubmit="return validate()" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Image:</td>
                    <td><input type="file" name="image" id="image"></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                <td>Price:</td>
                <td><input type="text" name="price" id="price"></td>
            </tr>
                <tr>
                    <td><input type="submit" value="Add"></td>
                </tr>
            </table>
            <script>
                function validate() {
                    var image = document.getElementById("image").value;
                    var name = document.getElementById("name").value;
                    var price= document.getElementById("price").value;
                    if (image == "" && name == "" && price=="") {
                        alert("empty field ");
                        return false;
                    } else if (image == "") {
                        alert("image");
                        return false;
                    } else if (name == "") {
                        alert("name");
                        return false;
                    }
                    else if(price == "")
                    {
                        alert("price");
                        return false;
                    }
                    return true;
                }
            </script>
        </form>
    </body>
</html>