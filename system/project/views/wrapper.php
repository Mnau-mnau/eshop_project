<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="css/jquery-ui.structure.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
  <style>
    ::before,
    ::after{
        box-sizing: border-box;
    }
    body{
        max-width:1200px;
        margin:auto;
        background-color:lightblue;
    }
    
    .navig{
        height:100%;
        background-color:white;
        padding-top:30px;
        padding-bottom:60px;
    }
    .new-product{
        display:flex;
        flex-direction:column;
        justify-content: center;
        margin:10px;
        
  
    }
    .new-product img{
        display:block;
        height:200px;

    }
  </style>
    </head>

    <body>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 navig">
            <?php echo $navigation;?>
            <?php echo $footer; ?>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
            <?php echo $page_layout;?>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>