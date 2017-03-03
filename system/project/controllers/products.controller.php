<?php

// products showcase
$showcase = new view('products/showcase');
$all_products = Product_Model::getProducts();
$showcase->all_products = $all_products;


//categories


//page layout
$page_layout = new view('products/page_layout');
$page_layout->showcase = $showcase;



presenter::setTitle('Products');
presenter::present($page_layout);
