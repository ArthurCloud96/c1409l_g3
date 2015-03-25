
<?php
require_once '../include/config.php';
require_once '../include/functions.php';
require_once '../include/process.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/admin">
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:700italic' rel='stylesheet' type='text/css'>
        <title>Admin Login</title>
        <style>
            * {
                margin: 0;
                padding: 0;
            }
            body{
                margin: auto;
                padding: auto;

            }
            form{
                width: 300px;
                height: 200px; 
                background-color: white;
                border: #003B23 solid 1px;
                margin: auto;
                margin-top: 250px;
                padding-left: 20px;
                color: #003B23;
            }
            tr:hover{
                color: #CE8F30;
            }
            h1:hover{
                color: #CE8F30;
            }

        </style>
    </head>
    <body>
        <form action="./process/admin.php?do=do_login" method="post">
            <h1 style="text-align: center;font-family: 'Playfair Display', serif;">WELCOME!</h1>
            <table>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="username" /></td>
                </tr>

                <tr>
                    <th>Password</th>
                    <td><input type="password" name="password" /></td>
                </tr>

                <tr>
                    <th></th>
                    <td><input type="submit" value="Login" style="color: #003B23;text-align: right;"/></td>
                </tr>

                <tr>
                    <th colspan="2" style="text-align: right;">
                        <?php
                        if (get("error") == 1) {
                            echo "Login failed";
                        } else if (get("error") == 2) {
                            echo "You have to login first";
                        } else if (get("error") == 3) {
                            echo "You have successfully logged out";
                        }
                        ?>
                    </th>
                </tr>
            </table>
        </form>
    </body>
</html>