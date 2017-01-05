<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 12:49
 */

require("log_reg_func.php");
require("./Database.php");

session_start();
$db = DB();
$login_error_message = '';

if (!empty($_POST['btnLogin'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == "") {
        $login_error_message = 'Username field is required!';
    } else if ($password == "") {
        $login_error_message = 'Password field is required!';
    } else {
        $user_id = Login($username, $password);
        if ($user_id > 0) {
            $_SESSION['user_id'] = $user_id;
            header("Location: Home_loged.php");
        } else {
            $login_error_message = 'Invalid login details!';
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Logo</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>
<body>
<div class="row">
    <div class="col-md-5 well">
        <h4>Login</h4>
        <?php
        if ($login_error_message != "") {
            echo '<div class="alert alert-danger"><strong>Error: </strong> ' . $login_error_message . '</div>';
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="">Username/Email</label>
                <input type="text" name="username" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control"/>
            </div>
            <div class="form-group">
                <input type="submit" name="btnLogin" class="btn btn-primary" value="Login"/>
            </div>
        </form>
    </div>
</div>
</body>
</Html>