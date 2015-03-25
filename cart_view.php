<?php
require_once './header.php';
require_once './inc_new.php';
?>
<?php

if($_SESSION["cart"]=="") {
    echo "Cart empty";
}
else
{   
$cus_username = post("cus_username");
$cus_password = post("cus_password");
$view_query = "SELECT * FROM customer WHERE `cus_username` = '$cus_username' and `cus_password` = '$cus_password'";
$view_result  = execute_query($view_query);
$view_row = mysqli_fetch_assoc($view_result);
$view_query_check = mysqli_num_rows($view_result);
$cart = $_SESSION["cart"];
$i = count($_SESSION["cart"]);

$query = "SELECT * FROM product WHERE productid IN (";
$comma = "";


foreach ($_SESSION["cart"] as $key => $value) {
    $query .= $comma . $key;
    $comma = ",";
}

$query .= ")";

$rs = execute_query($query);


?>

<h1>Product in your cart: <?php
    echo $i;
    ?>
</h1>
<form action="#" method="post">
    <table>
        <tr>
            <td>Product ID</td>
            <td>Product Name</td>
            <td>Price</td>        
            <td>Quantity</td>
            <td>Total</td>
        </tr>

        <?php
        $totalprice = 0;
        while ($row = mysqli_fetch_assoc($rs)) {
            ?>
            <tr>
                <td><?php echo $row["productid"] ?></td>
                <td><?php echo $row["pname"] ?></td>
                <td><?php echo $row["price"] ?></td>        
                <td><?php echo $_SESSION["cart"][$row["productid"]] ?></td>
                <td><?php echo $_SESSION["cart"][$row["productid"]] * $row["price"] ?></td>
                <td><a href="process/cart.php?do=delete&productid=<?php echo $row["productid"] ?>">Delete</a></td>
            </tr>
            <?php
            $totalprice += $row["price"];
        }

        ?>
        <tr>
            <th>Total Price: <?php echo $totalprice ?></th>
        </tr>


    </table>

    <form action="cart_view.php" method="post">
        
            <table>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="cus_username" /></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="cus_password" /></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Order" /></td>
                </tr>
                <?php 
                if ($cus_username != '0') {
                if ($view_query_check != '0')
                {
                    ?>
                    <tr>
                    <th>Full name: </th>
                    <td><input type="text" name="cus_fullname" value="<?php echo $cus_fullname ?>"/></td>
                    </tr>

                    <tr>
                    <th>Address: </th>
                    <td><input type="text" name="cus_address" value="<?php echo $cus_address ?>"/></td>
                    </tr>
                    
                    <tr>
                    <th>Phone: </th>
                    <td><input type="text" name="cus_phone" value="<?php echo $cus_phone ?>"/></td>
                    </tr>
                    
                    <tr>
                    <th></th>
                    <td><input type="submit" value="Order" /></td>
                    </tr>
                    
                    <?php 
                }
                else
                {
                    ?>
                    <th>Full name: </th>
                    <td><input type="text" name="cus_fullname" value="<?php echo $cus_fullname ?>"/></td>
                    </tr>

                    <tr>
                    <th>Address: </th>
                    <td><input type="text" name="cus_address" value="<?php echo $cus_address ?>"/></td>
                    </tr>
                    
                    <tr>
                    <th>Phone: </th>
                    <td><input type="text" name="cus_phone" value="<?php echo $cus_phone ?>"/></td>
                    </tr>
                    
                    <tr>
                    <th></th>
                    <td><input type="submit" value="Register and order" /></td>
                    </tr>
                    <?php
                }}
                ?>
            </table>
    </form>
</form>
<?php } ?> 
<a href="process/cart.php?do=remove2">Destroy</a>