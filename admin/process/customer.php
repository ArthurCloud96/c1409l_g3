<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $username = post("cus_username");
    $password = post("cus_password");
    $fullname = post("cus_fullname");
    $address = post("cus_address");
    $phone = post("cus_phone");
    $query = "INSERT INTO `customer` VALUES (NULL, '$username','$password','$fullname','$address','$phone')";
    
    $result = execute_query($query);
    redirect("../customer_list.php");
}

function update() {
    $cus_id = get("cus_id");
    $username = post("cus_username");
    $password = post("cus_password");
    $fullname = post("cus_fullname");
    $address = post("cus_address");
    $phone = post("cus_phone");
    $query = "UPDATE `customer` SET `cus_username` = '$username', `cus_password`='$password',`cus_fullname`='$fullname', `cus_address`='$address', `cus_phone`='$phone' WHERE `cus_id`='$cus_id'";
    
    
    $result = execute_query($query);
    redirect("../customer_list.php");
}

function delete(){
    $cus_id = get("cus_id");
    $query = "DELETE FROM `customer` WHERE `cus_id`='$cus_id'";
    $result = execute_query($query);
    redirect("../customer_list.php");
}

function do_login() {
    $username = post("username");
    $password = post("password");
    $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";

    //echo $query;	
    $result = execute_query($query);

    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["username"] = $username;

        redirect("../admin_list.php");
    } else {
        redirect("../admin_login.php?error=1");
    }
}

function logout() {
    unset($_SESSION["username"]);
    redirect("../admin_login.php?error=3");
}

function do_test() {
    die("TEST OK");
}

function test2() {
    die("Test2");
}
