<?php

$today = date('j. n. Y');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Homepage</title>
    </head>
    <body>

        <h1>The Home Page</h1>
        <h2><?php echo $today;?> </h2>

        <header class="header">
            <nav>
                <a href="<?php echo url::to('');?>">Home</a>
                <a href="<?php echo url::to('products');?>">Products</a>
                <a href="<?php echo url::to('contact');?>">Contact</a>
            </nav>
        </header>

    <h3> The URL of this page is <?php echo config::get('base_url', 'unknown'); ?></h3>
    <h4>'The administrator of this page is 
    <?php echo config::get('administrator', 'not found'); if(config::get('administrator') == null): echo 'not known yet.';endif;?>
    <?php if(config::get('administrator')==null){
        echo 'The administrator has to be set!';
    }
    ?>
    '</h4>

    <h2>Products</h2>
    <a href="<?php echo url::to('product', array('id' => 123));?>">Product 123 - test link</a>
    </body>
</html>