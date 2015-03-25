<?php
require './process/_inc.php';



// tao ra query, phai chay trong navicat truoc
$query = "SELECT * FROM `category`" ;

// mysql
$result = execute_query($query);
?>


<table border="1">
    <tr>		
        <th>Category Name</th>
    </tr>

<?php
while (($row = mysqli_fetch_assoc($result))) {
    ?>
        <tr>
            <td><?php echo $row["name"] ?></td>
            <td><a href="category_edit.php?catid=<?php echo $row["catid"] ?>">Edit</a></td>
            <td><a href="process/category.php?do=delete&catid=<?php echo $row["catid"] ?>">Delete</a></td>
        </tr>	
<?php } ?>	
</table>

<a href="category_addnew.php">Add new category</a>
<a href ="process/admin.php?do=logout">Logout</a>


