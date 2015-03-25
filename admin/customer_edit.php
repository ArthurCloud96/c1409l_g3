<?php
require_once './process/_inc.php';

$cus_id = get("cus_id");

$result = execute_query("SELECT * FROM `customer` WHERE `cus_id` ='$cus_id'");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="process/customer.php?do=update&cus_id=<?php print_r($cus_id) ?>" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td><input type="text" name="cus_username" id="cus_id" 
                       value="<?php echo $row["cus_username"] ?>" /></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="text" name="cus_password" id="cus_password"
                       value="<?php echo $row["cus_password"] ?>" /></td>
        </tr>
        
        <tr>
            <th>FullName</th>
            <td><input type="text" name="cus_fullname" id="cus_fullname" 
                       value="<?php echo $row["cus_fullname"] ?>" /></td>
        </tr>

        <tr>
            <th>Address</th>
            <td><input type="text" name="cus_address" id="cus_address"
                       value="<?php echo $row["cus_address"] ?>" /></td>
        </tr>


        <tr>
            <th>Phone</th>
            <td><input type="text" name="cus_phone" id="cus_phone"
                       value="<?php echo $row["cus_phone"] ?>" /></td>
        </tr>

        <tr>
            <th><input type="submit" value="Update" /></th>
            <td><button>Cancel</button></td>
        </tr>
    </table>
</form>
