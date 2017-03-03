<?php

$addproduct = new view('admin/addproduct/addproduct');
$insert_data = array();
if($_POST){
    $insert_data = array(
    $_POST['name'],
    $_POST['description'], 
    $_POST['price'],
    $_POST['size'],
    $_POST['weight'],
    $_POST['color'],
    $_POST['image_name']);
    $file=null;
    $destination = null;
    if(isset($_FILES['product_image'])){
        $file = $_FILES['product_image'];
        $destination = DOCROOT.'/img/ '.$file;
        sleep(10);
        move_uploaded_file($file, $destination);
    }
}
AddProduct_Model::addProduct($insert_data);
var_dump($_FILES);
//this will need a model to insert data to the database, yeehaa


//page layout
$page_layout = new view('admin/addproduct/page_layout');
$page_layout->addproduct = $addproduct;


//set the title of this page
presenter::setTitle('Add Product');

//give the layout to the presenter to present
presenter::present($page_layout);
?>