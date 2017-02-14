<?php

$name = request::post('name');
$email = request::post('email', '');
$text = request::post('message', '');
$newsletter = request::post('newsletter', '0');

$form_view = new view('contact/form');

$form_view->email = $email;
$form_view->name = $name;
$form_view->message = $text;
$form_view->newsletter = $newsletter;
//example of retrieving the rendered html and not printing it
//$html = $form_view->render(false);\

presenter::setTitle('Contact');
presenter::present($form_view);


