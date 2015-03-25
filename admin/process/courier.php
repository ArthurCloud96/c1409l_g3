<?php

require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $cou_username = post("cou_username");
    $cou_password = post("cou_password");
    $cou_fullname = post("cou_fullname");
    $cou_address = post("cou_address");
    $cou_phone = post("cou_phone");
    $query = "INSERT INTO `courier` VALUES (NULL, '$cou_username','$cou_password','$cou_fullname','$cou_address','$cou_phone')";
    $result = execute_query($query);
    redirect("../courier_list.php");
}

function update() {
    $cou_id = get("cou_id");
    $cou_username = post("cou_username");
    $cou_password = post("cou_password");
    $cou_fullname = post("cou_fullname");
    $cou_address = post("cou_address");
    $cou_phone = post("cou_phone");
    $query = "UPDATE `courier` SET `cou_username` = '$cou_username', `cou_password`='$cou_password', `cou_fullname`= '$cou_fullname', `cou_address`='$cou_address', `cou_phone`='$cou_phone' WHERE `cou_id`='$cou_id'";


    $result = execute_query($query);
    redirect("../courier_list.php");
}

function delete() {
    $cou_id = get("cou_id");
    $query = "DELETE FROM `courier` WHERE `cou_id`='$cou_id'";
    $result = execute_query($query);
    redirect("../courier_list.php");
}

function logout() {
    unset($_SESSION["username"]);
    redirect("../admin_login.php?error=3");
}
