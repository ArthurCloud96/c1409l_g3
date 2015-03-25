<?php
require_once './admin_header.php';
?>

<?php
require_once './process/_inc.php';

$adminid = get("adminid");

$result = execute_query("SELECT * FROM `admin` WHERE `AdminId` ='$adminid'");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="process/admin.php?do=update&adminid=<?php print_r($adminid) ?>" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td><input type="text" name="username" id="adminid" 
                       value="<?php echo $row["username"] ?>" /></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="text" name="password" id="password"
                       value="<?php echo $row["password"] ?>" /></td>
        </tr>
        
        <tr>
            <th>FullName</th>
            <td><input type="text" name="fullname" id="adminid" 
                       value="<?php echo $row["fullname"] ?>" /></td>
        </tr>

        <tr>
            <th>Address</th>
            <td><input type="text" name="address" id="address"
                       value="<?php echo $row["address"] ?>" /></td>
        </tr>


        <tr>
            <th>Phone</th>
            <td><input type="text" name="phone" id="phone"
                       value="<?php echo $row["phone"] ?>" /></td>
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
