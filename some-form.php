<?php 

// some form
?>
  <style>
            form{
                background-color: pink;
                padding:10px;
                width: 200px;
            }
            input{
                margin:5px;
            }
        </style>
  <form action="" method="post">
        <input type="text" name="actor[name]" value="<?php //echo htmlspecialchars(request::post('actor')['name']);?>"><br>
        <textarea name="actor[biography]"> <?php //echo htmlspecialchars(request::post('actor')['biography']);?> </textarea><br>
        <input type="submit" value="voila!">
        </form>