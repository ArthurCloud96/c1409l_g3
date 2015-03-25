<!DOCTYPE html>
<?php
require_once './process/_inc.php';
$adminname = $_SESSION["username"];

$adminquery = "SELECT * FROM `admin` WHERE `username` = '$adminname'";

$adminresult = execute_query($adminquery);
$adminrow = mysqli_fetch_assoc($adminresult);
?>
<html>

    <head>
        <meta charset="Utf-8">
        <title>Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
        <link href="css/table.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header>
            <div class="wrapper">
                <a href="../home.php"><img src="../imgs/123.png"/></a>
            </div>
        </header>

        <div class="menu" >
            <div class="wrapper">      
                <ul>
                    <li><a href="#"><h3>Admin</h3></a>
                        <ul>
                            <li><a href="admin_list.php">LIST</a></li>
                            <li><a href="admin_addnew.php">ADD NEW</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><h3>Customer</h3></a>
                        <ul>
                            <li><a href="customer_list.php">LIST</a></li>
                            <li><a href="customer_addnew.php">ADD NEW</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><h3>Product</h3></a>
                        <ul>
                            <li><a href="product_list.php">LIST</a></li>
                            <li><a href="">SEARCH</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><h3>Manager</h3></a>
                        <ul>
                            <li><a href="manager_list.php">LIST</a></li>
                            <li><a href="manager_addnew.php">ADD NEW</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><h3>Courier</h3></a>
                        <ul>
                            <li><a href="courier_list.php">LIST</a></li>
                            <li><a href="courier_addnew.php">ADD NEW</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><h3>Order</h3></a>
                        <ul>
                            <li><a href="">LIST</a></li>
                            <li><a href="">ADD NEW </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="fuck">
            <!--                <div id="shit" style=" position: fixed;">-->
            <div class="left">
                <p style=" background-color: #003B23;">Welcome back! </p>
                <p style=" background-color: mediumseagreen;"><?php echo $adminrow["username"] ?></p>
                <p style="background-color: lightgreen;"><a href ="process/admin.php?do=logout">Log out</a></p>
            </div>
        </div>

        <div class="wrapper">
            <div class="content">