<?php
//blog page
$blog = new view('blog/blog');
//here will be data source model for the page

$page_layout = new view('blog/page_layout');
$page_layout->blog = $blog;

//set the title of this page
presenter::setTitle('Blog');

//give the layout to the presenter to present
presenter::present($page_layout);
?>