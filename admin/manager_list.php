<?php
require_once './process/_inc.php';

// tao ra query, phai chay trong navicat truoc
$query = "SELECT * FROM `manager`";

// mysql
$result = execute_query($query);
?>
<table border="1">
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
        <tr>
            <td><?php echo $row["man_username"] ?></td>
            <td><?php echo $row["man_password"] ?></td>
            <td><?php echo $row["man_fullname"] ?></td>
            <td><?php echo $row["man_address"] ?></td>
            <td><?php echo $row["man_phone"] ?></td>
            <td><a href="manager_edit.php?man_id=<?php echo $row["man_id"] ?>">Edit</a></td>
            <td><a href="process/manager.php?do=delete&man_id=<?php echo $row["man_id"] ?>">Delete</a></td>
        </tr>	
    <?php } ?>	
</table>

<a href="manager_addnew.php">Add new manager</a>
<a href ="process/manager.php?do=logout">Logout</a>



