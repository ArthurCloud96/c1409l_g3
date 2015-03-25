<?php
require_once './admin_header.php';
?>

<?php
require_once './process/_inc.php';

$cou_id = get("cou_id");

$result = execute_query("SELECT * FROM `courier` WHERE `cou_id` ='$cou_id'");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="process/courier.php?do=update&cou_id=<?php print_r($cou_id) ?>" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td><input type="text" name="cou_username" id="adminid" 
                       value="<?php echo $row["cou_username"] ?>" /></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="text" name="cou_password" id="password"
                       value="<?php echo $row["cou_password"] ?>" /></td>
        </tr>

        <tr>
            <th>Fullname</th>
            <td><input type="text" name="cou_fullname" id="adminid" 
                       value="<?php echo $row["cou_fullname"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Address</th>
            <td><input type="text" name="cou_address" id="address"
                       value="<?php echo $row["cou_address"] ?>" /></td>
        </tr>


        <tr>
            <th>Phone</th>
            <td><input type="text" name="cou_phone" id="phone"
                       value="<?php echo $row["cou_phone"] ?>" /></td>
        </tr>

        <tr>
            <th><input type="submit" value="Update" /></th>
            <td><button>Cancel</button></td>
        </tr>
    </table>
</form>

<?php
require_once './admin_footer.php';
?>