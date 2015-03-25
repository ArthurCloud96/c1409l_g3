<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';


function update() {
    $catid = get("catid");
    $name = post("name");
    $query = "UPDATE `category` SET `name` = '$name' WHERE `catid`='$catid'";
   
    $result = execute_query($query);
    redirect("../category_list.php");
}

function delete(){
    $catid = get("catid");
    $query = "DELETE FROM `category` WHERE `catid`='$catid'";
    $result = execute_query($query);
    redirect("../category_list.php");
}

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $name = post("name");
    $query = "INSERT INTO `category` VALUES (NULL,'$name')";

    $result = execute_query($query);
    redirect("../category_list.php");
}

function logout() {
    unset($_SESSION["username"]);
    redirect("../admin_login.php?error=3");
}