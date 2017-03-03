<?php
// get category id from url
$category_id = request::get('id');

$category = Category_Model::retrieveById($category_id);

var_dump($category);

//category information
$category_detail = new view('categories/category_detail');
$category_detail->category = $category;


//top products from category
$top_products = new view('categories/top_products');

//list of sub-categories
$categories = new view('home/categories');
$categories->categories = Category_Model::getSubCategory($category_id);

$page_layout = new view('categories/page_layout');
$page_layout->category_detail = $category_detail;
$page_layout->top_products = $top_products;
$page_layout->categories = $categories;

// this contains our wrapper
presenter::present($page_layout);