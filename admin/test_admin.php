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
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["password"] ?></td>
            <td><?php echo $row["fullname"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td><a href="admin_edit.php?adminid=<?php echo $row["adminid"] ?>">Edit</a></td>
            <td><a href="process/admin.php?do=delete&adminid=<?php echo $row["adminid"] ?>">Delete</a></td>
        </tr>	
    <?php } ?>	
</table>
<br/>


<div class="paging">
    <a href="product_list.php?p=<?php echo $p - 1; ?>">Previous</a>

    <?php for ($i = 1; $i <= $max_page; $i++) { ?>
        <a href="product_list.php?p=<?php echo $i ?>"><?php echo $i ?></a>
    <?php } ?>

    <a href="product_list.php?p=<?php echo $p + 1; ?>">Next</a>
</div>
<?php
require_once './admin_footer.php';
?>

