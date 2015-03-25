<?php
require_once './admin_header.php';
?>


<?php
require_once './process/_inc.php';

// tao ra query, phai chay trong navicat truoc
$query = "SELECT * FROM `courier`";

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
            <td><?php echo $row["cou_username"] ?></td>
            <td><?php echo $row["cou_password"] ?></td>
            <td><?php echo $row["cou_fullname"] ?></td>
            <td><?php echo $row["cou_address"] ?></td>
            <td><?php echo $row["cou_phone"] ?></td>
            <td><a href="courier_edit.php?cou_id=<?php echo $row["cou_id"] ?>"><img src="admin_imgs/images.png"/></a></td>
            <td><a href="process/courier.php?do=delete&cou_id=<?php echo $row["cou_id"] ?>"><img src="admin_imgs/Close_Box_Red.png"/></a></td>
        </tr>	
    <?php } ?>	
</table>

<a href="courier_addnew.php">Add new courier</a>


<?php
require_once './admin_footer.php';
?>



