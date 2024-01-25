<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <form method="post" action="login.php" onsubmit="return validate()">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="login"></td>
                </tr>
            </table>
            <script>
                function validate() {
                    var username = document.getElementById("username").value;
                    var password = document.getElementById("password").value;
                    if (username == "" && password == "") {
                        alert("empty field ");
                        return false;
                    } else if (username == "") {
                        alert("username");
                        return false;
                    } else if (password == "") {
                        alert("password");
                        return false;
                    }
                    return true;
                }
            </script>
        </form>
    </body>
</html>