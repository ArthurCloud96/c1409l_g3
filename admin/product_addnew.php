<?php
require_once './admin_header.php';
?>
<?php
require './process/_inc.php';
$query = "SELECT * FROM category";
$result = execute_query($query);
?>


<form action="process/product.php?do=add_new" method="post">
    <table>

        <tr>
            <th >Category</th>
            <td> 
                <select name="catid">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <option value="<?php echo $row["catid"]; ?>">
                            <?php echo $row["name"]; ?>
                        </option> 
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <th>Product Name</th>
            <td><input type="text" name="pname" id="pname" /></td>
        </tr>

        <tr>
            <th>Price</th>
            <td><input type="number" name="price" id="price" /></td>
        </tr>

        <tr>
            <th>Quantity</th>
            <td><input type="text" name="quantity" id="quantity" /></td>
        </tr>

        <tr>
            <th><input type="submit" value="Add new" /></th>
            <td><button>Cancel</button></td>
        </tr>							
    </table>
</form>



<?php
require_once './admin_footer.php';
?>

