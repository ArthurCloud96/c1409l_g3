<?php
$view_query = "SELECT * FROM customer WHERE `cus_username` = '$cus_username' and `cus_password` = '$cus_password'";
$view_result  = execute_query($view_query);
$view_row = mysqli_fetch_assoc($view_result);
?>