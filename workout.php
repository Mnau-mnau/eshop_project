<?php

$x = 5;
if($x == 123)
{

}
?>
<form method="" action="post">
    <input type="text" name="foo"/>
</form>
<?php
echo htmlspecialchars($_POST['foo']); // validation of the data - secured data input
if(isset($_POST['foo']) && $_POST['foo']){
    echo $_POST['foo'];
}
