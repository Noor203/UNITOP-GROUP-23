<style><?php include('../css/home-page.css')?></style>
<?php
require_once('connectdb.php');
$query = "SELECT product_id, product_name, price FROM products";
$products = $db->query($query);

if($products->rowCount() > 0){
    echo "<head></head>";
    while($laptop = $products->fetch()){
        echo"
        <section class='products'>
        <a href='product-details.php?id=".$laptop['product_id']."'>
        <img src='assests/Product/Thumbnail/".$laptop['product_id'].".png' alt=''>
        <h4>".$laptop['product_name']."</h4>
        <p>£".$laptop['price']."</p>
        </a>
        <button class='button'>Quick Add</button>
        </section>";
    }
}
