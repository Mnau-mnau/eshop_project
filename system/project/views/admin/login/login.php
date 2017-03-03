<?php 
//email & admin access & password verification

//login model not created yet!!! function getAdminByEmail not defined yet so don't uncomment this block

/*
if(isset($_POST['email']) && isset($_POST['password']))
{
    $verify = array();
    $verify = Login::getUserAdmin=$verify['email'] && $verify['is_admin'] == true && password_verify($_POST['password'], $verify['password']))
    {
        session_start();
        $_SESSION['user_id']= $verify['id'];
        header('Location: admin.php');
    }
    else
    {
        echo '<h3 style="color:red">Unknown user or password</h3></br>'
            .'<a class="btn btn-warning" href="index.php">Return to homepage</a>';
    }
}
*/


?>

<form method="post" action="">
    <h4>Email: </h4>
    <input type="text" name="email" id="email"></br>
    <h4>Password: </h4>
    <input type="password" name="password"> </br>
    <input type="submit" value="Log in">
</form>
<?php //if action is success header to admin.php