<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $username = post("username");
    $password = post("password");
    $fullname = post("fullname");
    $address = post("address");
    $phone = post("phone");
    $query = "INSERT INTO `admin` VALUES (NULL, '$username','$password','$fullname','$address','$phone')";
    
    $result = execute_query($query);
    redirect("../admin_list.php");
}

function update() {
    $adminid = get("adminid");
    $username = post("username");
    $password = post("password");
    $fullname = post("fullname");
    $address = post("address");
    $phone = post("phone");
    $query = "UPDATE `admin` SET `username` = '$username', `password`='$password',`fullname`='$fullname', `address`='$address', `phone`='$phone' WHERE `adminid`='$adminid'";
    
    
    $result = execute_query($query);
    redirect("../admin_list.php");
}

function delete(){
    $adminid = get("adminid");
    $query = "DELETE FROM `admin` WHERE `adminid`='$adminid'";
    $result = execute_query($query);
    redirect("../admin_list.php");
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
