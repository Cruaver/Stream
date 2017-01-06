<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 12:49
 */

include('./log_reg_func.php');
include('./Database.php');

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
            header("Location: Home.php");
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
    <title>Stream</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<div>
        <h4>Login</h4>
        <?php
        if ($login_error_message != "") {
            echo '<div class="alert"><strong>Error: </strong> ' . $login_error_message . '</div>';
        }
        ?>
        <form action="login.php" method="post">
            <div class="form">
                <label for="">Username/Email</label>
                <input type="text" name="username" class="form_input"/>
            </div>
            <div class="form">
                <label for="">Password</label>
                <input type="password" name="password" class="form_input"/>
            </div>
            <div class="form">
                <input type="submit" name="btnLogin" class="btn" value="Login"/>
            </div>
        </form>
</div>
</body>
</Html>