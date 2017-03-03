<?php
//top products page
//this can also be set as new products if someone is willing to add it to the database
$new_products = new view('home/new_products');
$new_products->products = Product_Model::getNewProducts();


//list of categories
//$categories = new view('home/categories');
//$categories->categories = Category_Model::getCategory();

//About
$info = new view('home/info');

//page layout
$page_layout = new view('home/page_layout');
$page_layout->new_products = $new_products;
//$page_layout->categories = $categories;
$page_layout->info = $info;

//set the title of this page
presenter::setTitle('Homepage');

//give the layout to the presenter to present
presenter::present($page_layout);
?>

