<?php
require_once './admin_header.php';
?>


<?php
require_once './process/_inc.php';

// tao ra query, phai chay trong navicat truoc
$query = "SELECT * FROM `admin`";

// mysql
$result = execute_query($query);
?>
<table border="1" class="bitch">
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>FullName</th>
        <th>Address</th>
        <th>Phone</th>
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($result))) {
        ?>
        <tr class="dog">
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["password"] ?></td>
            <td><?php echo $row["fullname"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td><a href="admin_edit.php?adminid=<?php echo $row["adminid"] ?>"><img src="admin_imgs/images.png"/></a></td>
            <td><a href="process/admin.php?do=delete&adminid=<?php echo $row["adminid"] ?>"><img src="admin_imgs/Close_Box_Red.png"/></a></td>
        </tr>	
    <?php } ?>	
</table>
<br/>
<a href="admin_addnew.php">Add new Admin</a>

<?php
require_once './admin_footer.php';
?>

