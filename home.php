<?php
require_once 'header.php';
require_once './inc_new.php';
?>

<div class="wrapper">
    <div class="neoslideshow">
        <img src="imgs/Ahmad Earl Grey tea 2.png"  style="display: none;">
        <img src="imgs/ebt-winter-charm.png"  style="display: none;">
        <img src="imgs/ahmadtea_thumb.png"  style="display: none;">

    </div>    
</div>

<br/>


<div class="wrapper">
    <div id="body">
        <div id="left-bar">
            <ul>               
                <li id="list1"><a href="home_staff.php" class="list"><h5>STAFF</h5></a></li>
                <li id="list1"><a href="home.php" class="list"><h5>CUSTOMER</h5></a></li>
            </ul>
        </div>
        <div id="right-bar">
            <form action="process/form_process.php" method="post"> 
                <table class="form">
                    <tr>
                        <th>Full name</th>
                        <td><input type="text" name="fullname" /></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input type="text" name="email" /></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>
                            <label><input type="radio" name="gender" value="Nam"/>Male</label>
                            <label><input type="radio" name="gender" value="Nu"/>Female</label>
                        </td>
                    </tr>
                    <tr>
                        <th>Content</th>
                        <td>
                            <input id="content" type="text" name="Phan Hoi"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="center">
                            <input type="submit" value="Send" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>    
</div>

<a href="process/admin.php?do=logout" >Đăng xuất</a>

<br/>



<?php
require_once 'footer.php';
?>

