<?php
require_once './admin_header.php';
?>

<?php
require_once './process/_inc.php';

$p = get("p");
if ($p < 1) {
    $p = 1;
}

$start = ($p - 1) * PAGE_ROW;

// dem so ban ghi trong toan bo bang
$count_query = "SELECT COUNT(*) AS cnt FROM product";
$count_result = execute_query($count_query);
$count_row = mysqli_fetch_assoc($count_result);
//echo $count_row["cnt"];

$max_page = ceil($count_row["cnt"] / PAGE_ROW);

// tao ra query, phai chay trong navicat truoc
$query = "SELECT * FROM `product` JOIN `category` ON category.catid = product.catid ORDER BY productid". createLimitForPaging($p);

// mysql
$result = execute_query($query);
?>



<table border="1" class="bitch">
    <tr>
        <th>Category</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($result))) {
        ?>
        <tr class="dog">
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["pname"] ?></td>
            <td><?php echo $row["price"] ?></td>
            <td><?php echo $row["quantity"] ?></td>
            <td><a href="product_edit.php?productid=<?php echo $row["productid"] ?>"><img src="admin_imgs/images.png"/></a></td>
            <td><a href="process/product.php?do=delete&productid=<?php echo $row["productid"] ?>"><img src="admin_imgs/Close_Box_Red.png"/></a></td>
        </tr>	
    <?php } ?>	
</table>

<div class="paging">
    <a href="product_list.php?p=<?php echo $p - 1; ?>">Previous</a>

<?php for ($i = 1; $i <= $max_page; $i++) { ?>
        <a href="product_list.php?p=<?php echo $i ?>"><?php echo $i ?></a>
    <?php } ?>

    <a href="product_list.php?p=<?php echo $p + 1; ?>">Next</a>
</div>

<a href="product_addnew.php">Add new product</a>



<?php
require_once './admin_footer.php';
?>