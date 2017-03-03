<?php
$detail = new view('detail/detail');
$id= [request::get('id')];

$detail_data = Product_Model::getDetail($id);
$detail->detail_data = $detail_data;

$page_layout = new view('detail/page_layout');
$page_layout->detail = $detail;

presenter::setTitle('Product detail');
presenter::present($page_layout);
