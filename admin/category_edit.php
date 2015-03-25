<?php
require_once './process/_inc.php';

$catid = get("catid");

$result = execute_query("SELECT * FROM `category` WHERE `catid` ='$catid'");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="process/category.php?do=update&catid=<?php print_r($catid) ?>" method="post">
    <table>

        <tr>
            <th>Name</th>
            <td><input type="text" name="name" id="name"
                       value="<?php echo $row["name"] ?>" /></td>
        </tr>

        <tr>
            <th><input type="submit" value="Update" /></th>
            <td><button>Cancel</button></td>
        </tr>
    </table>
</form>
