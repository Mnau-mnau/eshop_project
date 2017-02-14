<?php

?>
<div class="top-products">
    <h2>Top products in this eshop</h2>
    <ul>
        <?php foreach($products as $product): ?>
        <li>
            something
            <a href="<?php echo $product->getUrl();?>"> </a>
            <div class="name"><?php echo($product->name); ?></div>
            <div class="price"><?php echo $product->price; ?></div>
        </li>
        <?php endforeach; ?>
    </ul>

    </div>