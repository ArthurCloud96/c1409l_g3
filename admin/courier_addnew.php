<?php
require './process/_inc.php';
?>
<form action="process/courier.php?do=add_new" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td><input type="text" name="cou_username" id="cou_username" /></td>
        </tr>

        <tr> 
            <th>Password</th>
            <td><input type="password" name="cou_password" id="cou_password" /></td>
        </tr>				
        
        <tr>
            <th>FullName</th>
            <td><input type="text" name="cou_fullname" id="cou_fullname" /></td>
        </tr>

        <tr>
            <th>Address</th>
            <td><input type="text" name="cou_address" id="cou_address" /></td>
        </tr>
        
        <tr>
            <th>Phone</th>
            <td><input type="text" name="cou_phone" id="cou_phone" /></td>
        </tr>

        <tr>
            <th><input type="submit" value="Add new" /></th>
            <td><button>Cancel</button></td>
        </tr>							
    </table>
</form>
