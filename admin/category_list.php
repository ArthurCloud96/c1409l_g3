<?php
require_once './admin_header.php';
?>

<?php
require './process/_inc.php';



// tao ra query, phai chay trong navicat truoc
$query = "SELECT * FROM `category`" ;

// mysql
$result = execute_query($query);
?>


<table border="1" class="bitch">
    <tr>		
        <th>Category Name</th>
    </tr>

<?php
while (($row = mysqli_fetch_assoc($result))) {
    ?>
        <tr class="dog">
            <td><?php echo $row["name"] ?></td>
            <td><a href="category_edit.php?catid=<?php echo $row["catid"] ?>"><img src="admin_imgs/images.png"/></a></td>
            <td><a href="process/category.php?do=delete&catid=<?php echo $row["catid"] ?>"><img src="admin_imgs/Close_Box_Red.png"/></a></td>
        </tr>	
<?php } ?>	
</table>

<a href="category_addnew.php">Add new category | </a>




<?php
require_once './admin_footer.php';
?>

