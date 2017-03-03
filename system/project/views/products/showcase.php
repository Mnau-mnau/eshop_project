<div class="showcase" style="width:800px;">
    <div class="container">
        <div class="row">
            <?php foreach($all_products as $product): ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="all-products">
                    <img style="max-height:180px; margin:10px;" src="/img/<?php echo ($product->product_image);?>" alt="<?php echo($product->name); ?>"/>
                    <h4><?php echo($product->name); ?></h4>
                    <p><?php echo ($product->description);?></p>
                    <p><?php echo $product->price; ?></p>
                    <a class="btn btn-success" href="<?php echo $product->getUrl();?>">See the detail</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>