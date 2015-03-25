<?php
require_once './admin_header.php';
require './process/_inc.php';
?>
<form action="process/admin.php?do=add_new" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td><input type="text" name="username" id="username" /></td>
        </tr>

        <tr> 
            <th>Password</th>
            <td><input type="password" name="password" id="password" /></td>
        </tr>	
        
        <tr>
            <th>FullName    </th>
            <td><input type="text" name="fullname" id="fullname" /></td>
        </tr>


        <tr>
            <th>Address</th>
            <td><input type="text" name="address" id="address" /></td>
        </tr>
        
        <tr>
            <th>Phone</th>
            <td><input type="text" name="phone" id="phone" /></td>
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

