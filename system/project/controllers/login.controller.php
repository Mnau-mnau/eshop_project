<?php

//this is the page verifying admin access
$login = new view('admin/login/login');

$page_layout = new view('admin/login/page_layout');
$page_layout->login = $login;


//set the title of this page
presenter::setTitle('Admin login');

//give the layout to the presenter to present
presenter::present($page_layout);
?>
