<?php

require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';

function update() {
    $productid = get("productid");
    $pname = post("pname");
    $price = post("price");
    $description = post("description");
    $quantity = post("quantity");
    $query = "UPDATE `product` SET `pname` = '$pname', `price`='$price',`description`='$description', `quantity`='$quantity' WHERE `productid`='$productid'";

    $result = execute_query($query);
    redirect("../product_list.php");
}

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $name = post("catid");
    $pname = post("pname");
    $price = post("price");
    $description = post("description");
    $quantity = post("quantity");
    $query = "INSERT INTO `product` VALUES (NULL,'$name','$pname','$price','$description','$quantity')";

    execute_query($query);
    redirect("../product_list.php");
}

function delete() {
    $productid = get("productid");
    $query = "DELETE FROM `product` WHERE `productid`='$productid'";
    $result = execute_query($query);
    redirect("../product_list.php");
}

function logout() {
    unset($_SESSION["username"]);
    redirect("../admin_login.php?error=3");
}