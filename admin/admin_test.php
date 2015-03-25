<?php
require 'inc_header.php';
?>

<form action="admin/process/admin.php?do=add_new" method="post">
    <input type="text" name="username" /> 
    <input type="text" name="password" /> 
    <input type="text" name="fullname" /> 
    
    <input type="submit" value="thêm mới admin" />
</form>

<?php
require 'inc_footer.php';
?>