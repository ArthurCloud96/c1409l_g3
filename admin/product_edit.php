<?php
require_once './admin_header.php';
?>
<?php
require_once './process/_inc.php';

$productid = get("productid");

$result = execute_query("SELECT * FROM `product` JOIN `category` ON category.catid = product.catid WHERE `productid` ='$productid'");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="process/product.php?do=update&productid=<?php print_r($productid) ?>" method="post">
    <table>
        <tr>
            <th>Category</th>
            <td><input type="text" id="name" readonly=""
                       value="<?php echo $row["name"] ?>" /></td>
        </tr>

        <tr>
            <th>Product Name</th>
            <td><input type="text" name="pname" id="pname"
                       value="<?php echo $row["pname"] ?>" /></td>
        </tr>

        <tr>
            <th>Price</th>
            <td><input type="number" name="price" id="price"
                       value="<?php echo $row["price"] ?>" /></td>
        </tr>


        <tr>
            <th>Quantity</th>
            <td><input type="text" name="quantity" id="quantity"
                       value="<?php echo $row["quantity"] ?>" /></td>
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