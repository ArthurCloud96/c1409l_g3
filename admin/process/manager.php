<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $username = post("man_username");
    $password = post("man_password");
    $fullname = post("man_fullname");
    $address = post("man_address");
    $phone = post("man_phone");
    $query = "INSERT INTO `manager` VALUES (NULL, '$username','$password','$fullname','$address','$phone')";
    
    $result = execute_query($query);
    redirect("../manager_list.php");
}

function update() {
    $man_id = get("man_id");
    $username = post("man_username");
    $password = post("man_password");
    $fullname = post("man_fullname");
    $address = post("man_address");
    $phone = post("man_phone");
    $query = "UPDATE `manager` SET `man_username` = '$username', `man_password`='$password',`man_fullname`='$fullname', `man_address`='$address', `man_phone`='$phone' WHERE `man_id`='$man_id'";

    $result = execute_query($query);
    redirect("../manager_list.php");
}

function delete(){
    $man_id = get("man_id");
    $query = "DELETE FROM `manager` WHERE `man_id`='$man_id'";
    $result = execute_query($query);
    redirect("../manager_list.php");
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
