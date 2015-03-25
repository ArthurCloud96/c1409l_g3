<?php
require_once './admin_header.php';
?>

<?php
require './process/_inc.php';
?>
<form action="process/manager.php?do=add_new" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td><input type="text" name="man_username" id="man_username" /></td>
        </tr>

        <tr> 
            <th>Password</th>
            <td><input type="password" name="man_password" id="man_password" /></td>
        </tr>	

        <tr>
            <th>FullName    </th>
            <td><input type="text" name="man_fullname" id="man_fullname" /></td>
        </tr>


        <tr>
            <th>Address</th>
            <td><input type="text" name="man_address" id="man_address" /></td>
        </tr>

        <tr>
            <th>Phone</th>
            <td><input type="text" name="man_phone" id="man_phone" /></td>
        </tr>

        <tr>
            <th><input type="submit" value="Add new" /></th>
            <td><button>Cancel</button></td>
        </tr>							
    </table>
</form>

<?php
require_once './admin_footer.php';
?>
