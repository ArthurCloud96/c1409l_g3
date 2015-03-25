<?php
require_once './process/_inc.php';

// tao ra query, phai chay trong navicat truoc
$query = "SELECT * FROM `customer`";

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
            <td><?php echo $row["cus_username"] ?></td>
            <td><?php echo $row["cus_password"] ?></td>
            <td><?php echo $row["cus_fullname"] ?></td>
            <td><?php echo $row["cus_address"] ?></td>
            <td><?php echo $row["cus_phone"] ?></td>
            <td><a href="customer_edit.php?cus_id=<?php echo $row["cus_id"] ?>">Edit</a></td>
            <td><a href="process/customer.php?do=delete&cus_id=<?php echo $row["cus_id"] ?>">Delete</a></td>
        </tr>	
    <?php } ?>	
</table>

<a href="customer_addnew.php">Add new customer</a>
<a href ="process/customer.php?do=logout">Logout</a>



