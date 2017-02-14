<?php

// products showcase
$showcase = new view('products/showcase');

//categories
$categories = new view('home/categories');

//page layout
$page_layout = new view('products/page_layout');
$page_layout->showcase = $showcase;
$page_layout->categories = $categories;



presenter::present($page_layout);
presenter::setTitle('Products');