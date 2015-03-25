<?php

require_once '../include/config.php';
require_once '../include/functions.php';
require_once '../include/process.php';

function add() {
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
    $cart = $_SESSION["cart"];
    ///

    $productid = get("productid");

    if (array_key_exists($productid, $cart)) {
        $cart[$productid] = $cart[$productid] + 1;
    } else {
        $cart[$productid] = 1;
    }

    $_SESSION["cart"] = $cart;
    redirect("../temp_product_list.php");
}



function delete() {
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
    $cart = $_SESSION["cart"];
    ///

    $productid = get("productid");
    unset($cart[$productid]);

    $_SESSION["cart"] = $cart;
    redirect("../cart_view.php");
}

function remove2() {
    session_destroy();
}

function checkout_verify() {
    $cus_username = post("cus_username");
    $cus_password = post("cus_password");
    $view_query = "SELECT * FROM customer WHERE `cus_username` = '$cus_username' and `cus_password` = '$cus_password'";
    $view_result  = execute_query($view_query);
    $view_row = mysqli_fetch_assoc($view_result);
    $view_query_check = mysqli_num_rows($view_result);
}