<?php
require_once './admin_header.php';
?>
<?php
require './process/_inc.php';
?>
<form action="process/category.php?do=add_new" method="post">
    <table>

        <tr>
            <th>Name</th>
            <td><input type="text" name="name" id="name" /></td>
        </tr>

        <tr>
            <th><input type="submit" value="Add new" /></th>
            <td><button>Cancel</button></td>
        </tr>							
    </table>
</form>
<?php
require_once './admin_footer.php';
?>

