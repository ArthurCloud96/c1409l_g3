<?php
require_once './header.php';
require_once './inc_new.php';

$view_query = "SELECT * FROM `product`";
$view_result = execute_query($view_query);

$p = get("p");
if ($p < 1) {
    $p = 1;
}

$start = ($p - 1) * PAGE_ROW;

// dem so ban ghi trong toan bo bang
$count_query = "SELECT COUNT(*) AS cnt FROM product";
$count_result = execute_query($count_query);
$count_row = mysqli_fetch_assoc($count_result);
//echo $count_row["cnt"];

$max_page = ceil($count_row["cnt"] / PAGE_ROW);

// tao ra query, phai chay trong navicat truoc
$query = "SELECT * FROM `product` JOIN `category` ON category.catid = product.catid ORDER BY productid" . createLimitForPaging($p);
//die($query);
// mysql
$result = execute_query($query);
?>



<!-- Add jQuery library -->
<script type="text/javascript" src="js/fancybox/lib/jquery-1.10.1.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<script type="text/javascript">
    $(function () {
        $('.pic-pro').fancybox();
    });
</script>
<div class='wrapper' style="overflow: auto;">
    <img src='imgs/1959508_668827723154389_2875737213297844395_n.png'/>
</div>
<div class='wrapper'>
    <div class='middle'>
        <div class='middle-left'>
            <ul>
                <li class='list2'><a href="acessories.php">ACCESSORIES</a></li>
                <li class='list2'><a></a></li>
                <li class='list2'><a></a></li>
                <li class="list2">&nbsp;</li>
            </ul>
        </div>

        <div class='middle-right'>
            <div class="icon">
                <img src="imgs/about_icon.png"/>
                <h1 class= "aat" >Accessories</h1>
            </div>

            <?php
            $i = 0;
            while ($view_row = mysqli_fetch_assoc($result)) {
                $i++;
                ?>
                <div class='product'>
                    <a class="pic-pro" 
                       href="#info-pro-<?php echo $i ?>" 
                       data-fancybox-group="gallery" 
                       title="<?php echo $view_row['pname'] ?>">
                        <div> 
                            <img src='imgs/nf_image150.png'/>
                        </div>

                        <h4><?php echo $view_row['pname'] ?></h4>

                        <div>
                            <a href="process/cart.php?do=add&productid=<?= $view_row["productid"] ?>">Add To Cart</a>
                        </div>
                    </a>
                    <div id='info-pro-<?php echo $i ?>' class="info-pro">
                        <table>
                            <tr>
                                <td rowspan="5" ><img src='imgs/nf_image150.png'/></td>
                                <th>Name</th>
                                <td><?php echo $view_row['pname'] ?></td>
                            </tr>

                            <tr>
                                <th>Code</th>
                                <td><?php echo $view_row['productid'] ?></td>
                            </tr>


                            <tr>
                                <th>Price</th>
                                <td><?php echo $view_row['price'] ?></td>
                            </tr>

                            <tr>
                                <th>Stock</th>
                                <td><?php echo $view_row['quantity'] ?></td>
                            </tr>

                            <tr>
                                <th>Description</th>
                                <td><?php echo $view_row['productid'] ?></td>
                            </tr>
                        </table>
                    </div>  
                </div>
                <?php
            }
            ?>

            <div class="paging">
                <a href="temp_product_list.php?p=<?php echo $p - 1; ?>">Previous</a>

                <?php for ($i = 1; $i <= $max_page; $i++) { ?>
                    <a href="temp_product_list.php?p=<?php echo $i ?>"><?php echo $i ?></a>
                <?php } ?>

                <a href="temp_product_list.php?p=<?php echo $p + 1; ?>">Next</a>
            </div>
        </div>
    </div>        

</div>



<?php
require_once './footer.php';
?>