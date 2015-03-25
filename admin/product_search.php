<?php
require './process/_inc.php';
require './inc_checklogin.php';
$name = get("search_product");
$choice = get("choice");
?>
<h1>Product Search</h1>
<br />
<form action="" method="get">
    <select name="choice">
        <option value="pname" <?php echo $choice == 'pname' ? "selected" : "" ?>>Product</option>
        <option value="name" <?php echo $choice == 'name' ? "selected" : "" ?>>Category</option>
        <option value="price" <?php echo $choice == 'price' ? "selected" : "" ?>>Price</option> 
    </select>
    <input name="search_product" value="<?php echo get("search_product") ?>" type="text" />
    <input type="submit" value="Search" />
</form>


<?php
if ($name != "") {
    if ($choice == "pname" || $choice == "name") {
        $result = execute_query("SELECT * FROM `product` JOIN `category` ON `category`.catid = `product`.catid WHERE $choice  LIKE '%$name%' ORDER BY `productid`");
    } else {
        $result = execute_query("SELECT * FROM `product` JOIN `category` ON `category`.catid = `product`.catid WHERE $choice  LIKE '$name' ORDER BY `productid`");
    }
    if (!$result || mysqli_num_rows($result) == 0) {
        echo "Not Found!!!!";
    } else {
        ?>
        <?php
        $n = get("page");
        $n = ($n == "" ? 1 : $n);

        if ($choice == "pname" || $choice == "name") {
            $rs_count = execute_query("SELECT COUNT(*) as cnt FROM `product` JOIN `category` ON `category`.catid = `product`.catid WHERE $choice LIKE '%$name%' ORDER BY `productid`");
        } else {
            $rs_count = execute_query("SELECT COUNT(*) as cnt FROM `product` JOIN `category` ON `category`.catid = `product`.catid WHERE $choice = $name ORDER BY `productid`");
        }

        $count_row = mysqli_fetch_assoc($rs_count);
        $total = $count_row["cnt"];

        if ($choice == "pname" || $choice == "name") {
            $result1 = execute_query("SELECT * FROM `product` JOIN `category` ON `category`.catid = `product`.catid WHERE $choice LIKE '$name' ORDER BY `productid`" . createLimitForPaging($n));
        } else {
            $result1 = execute_query("SELECT * FROM `product` JOIN `category` ON `category`.catid = `product`.catid WHERE $choice = $name ORDER BY `productid`" . createLimitForPaging($n));
        }

        $total_page = ceil($total / PAGE_ROW);
        ?>

        <?php
        for ($i = 1; $i <= $total_page; $i++) {
            echo "<a href='?search_product_name=$name&page=$i'>$i</a> ";
        }
        ?>
        <table>
            <tr>
                <th>Category</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>      
            </tr>    

            <?php
            while ($row = mysqli_fetch_assoc($result1)) {
                ?>    
                <tr>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["pname"] ?></td>
                    <td><?php echo $row["price"] ?></td>
                    <td><?php echo $row["quantity"] ?></td>
                    <td><a href="product_edit.php?productid=<?php echo $row["productid"] ?>">Edit</a></td>
                    <td><a href="process/product.php?do=delete&productid=<?php echo $row["productid"] ?>">Delete</a></td>
                </tr>    
            <?php }
            ?>

        </table>
        <?php
    }
}
?>


