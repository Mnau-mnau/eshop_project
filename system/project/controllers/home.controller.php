<?php
//top products page
$top_products = new view('home/top_products');
//here we are connecting to the database and selecting the products from iterator_apply

//$resultset->setFetchMode(PDO::FETCH_OBJ); setting before setting models
//$products = $resultset->fetchAll();
//put the resultset  with the products into the view
$top_products->products = Product_Model::getTopProducts();


//list of categories
$categories = new view('home/categories');
$query = "SELECT `category`.*
        FROM `category`
        WHERE `category`.`parent_id` = NULL
";
$resultset = db::query($query);
$object = model::fetchObjects($resultset);
$categories->categories=$resultset;

//About
$info = new view('home/info');
$info->foo = 'bar';

//page layout
$page_layout = new view('page_layout');
$page_layout->top_products = $top_products;
$page_layout->categories = $categories;
$page_layout->info = $info;

presenter::setTitle('Homepage');
presenter::present($page_layout);
?>

// rest of the jokes that I can heartlessly delete

        <h3> The URL of this page is <?php echo config::get('base_url', 'unknown'); ?></h3>
        <h4>'The administrator of this page is 
        
        <?php
        //these are some jokes we have written on the page to show that our config file exists. Don't use it
         echo config::get('administrator', 'not found'); if(config::get('administrator') == null): echo 'not known yet.';endif;?>
        <?php if(config::get('administrator')==null){
        echo 'The administrator has to be set!';}?>
        '</h4>

        <h2>Products</h2>
        <a href="<?php echo url::to('product', array('id' => 123));?>">Product 123 - test link</a>
