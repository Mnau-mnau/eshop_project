<?php
//html head
$head_view = new view('head');
//navigation
$navigation_view = new view('navigation');
//footer
$footer = new view('footer');
//$product_controller = new view('product'); not created yet


?>

<?php echo $head_view;?>

<h1> I am a product page </h1>

<?php echo $navigation_view; ?>
<?php echo $footer;?>

</body>
</html>