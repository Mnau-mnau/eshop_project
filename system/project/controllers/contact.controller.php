<?php

$name = request::post('name');
$email = request::post('email', '');
$text = request::post('message', '');
$newsletter = request::post('newsletter', '0');

$form_view = new view('contact/form');
$about = new view('contact/about');


$form_view->email = $email;
$form_view->name = $name;
$form_view->message = $text;
$form_view->newsletter = $newsletter;

$page_layout = new view('contact/page_layout');
$page_layout->form = $form_view;
$page_layout->about = $about; 
//example of retrieving the rendered html and not printing it
//$html = $form_view->render(false);\

presenter::setTitle('Contact');
presenter::present($page_layout);


