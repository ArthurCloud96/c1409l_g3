<?php
require_once './admin_header.php';
?>

<?php
require './process/_inc.php';
?>
<form action="process/customer.php?do=add_new" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td><input type="text" name="cus_username" id="cus_username" /></td>
        </tr>

        <tr> 
            <th>Password</th>
            <td><input type="password" name="cus_password" id="cus_password" /></td>
        </tr>	
        
        <tr>
            <th>FullName    </th>
            <td><input type="text" name="cus_fullname" id="cus_fullname" /></td>
        </tr>


        <tr>
            <th>Address</th>
            <td><input type="text" name="cus_address" id="cus_address" /></td>
        </tr>
        
        <tr>
            <th>Phone</th>
            <td><input type="text" name="cus_phone" id="cus_phone" /></td>
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
