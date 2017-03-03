<?php
//top products page
$terms = new view('terms/terms');
//this page will be just fine with text included

//page layout
$page_layout = new view('terms/page_layout');
$page_layout->terms = $terms;

//set the title of this page
presenter::setTitle('Terms & Conditions');

//give the layout to the presenter to present
presenter::present($page_layout);
?>