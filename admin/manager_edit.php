<?php
require_once './process/_inc.php';

$man_id = get("man_id");

$result = execute_query("SELECT * FROM `manager` WHERE `man_id` ='$man_id'");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="process/manager.php?do=update&man_id=<?php print_r($man_id) ?>" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td><input type="text" name="man_username" id="man_username" 
                       value="<?php echo $row["man_username"] ?>" /></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="text" name="man_password" id="man_password"
                       value="<?php echo $row["man_password"] ?>" /></td>
        </tr>
        
        <tr>
            <th>FullName</th>
            <td><input type="text" name="man_fullname" id="man_fullname" 
                       value="<?php echo $row["man_fullname"] ?>" /></td>
        </tr>

        <tr>
            <th>Address</th>
            <td><input type="text" name="man_address" id="man_address"
                       value="<?php echo $row["man_address"] ?>" /></td>
        </tr>


        <tr>
            <th>Phone</th>
            <td><input type="text" name="man_phone" id="man_phone"
                       value="<?php echo $row["man_phone"] ?>" /></td>
        </tr>

        <tr>
            <th><input type="submit" value="Update" /></th>
            <td><button>Cancel</button></td>
        </tr>
    </table>
</form>
