<?php

?>
<div class="new-products" style="width:800px">
    <div class="container">
    <h2>New products in this eshop</h2>
        <div class="row">
        <?php foreach($products as $product): ?>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <div class="new-product">
                <img src="/img/<?php echo ($product->product_image);?>" alt="<?php echo($product->name); ?>"/>
                <h4><?php echo($product->name); ?></h4>
                <p><?php echo $product->price; ?></p>
                <a class="btn btn-success" href="<?php echo $product->getUrl();?>">See the detail</a>
            </div>
        </div>
        <?php endforeach; ?>
        </div>
    </div>
    <a class="btn btn-success" href="<?php echo url::to('products');?>">Show more products</a>
</div>