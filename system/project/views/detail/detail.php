<div class="detail">
    <div class="container">
        <div class="row">
            <?php foreach($detail_data as $product): ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="each-image">
                    <img style="max-height:75vh; max-width:100%; margin:10px;" src="/img/<?php echo ($product->product_image);?>" alt="<?php echo($product->name); ?>"/>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="each-detail">
                    <h4>Product name: <?php echo($product->name); ?></h4>
                    <p><strong>Description:</strong> <?php echo ($product->description);?></p>
                    <p><strong>Price: </strong><?php echo $product->price; ?></p>
                    <p><strong>Size: </strong><?php echo $product->size; ?></p>
                    <p><strong>Amount on stock: </strong></p>
                    <form action="cart.php" method="post">
                    <input type="submit" class="btn btn-success" value="Add to cart">
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>