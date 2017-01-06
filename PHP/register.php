<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 12:53
 */

require('./log_reg_func.php');
require('./Database.php');

session_start();
$db = DB();
$register_error_message = '';

if (!empty($_POST['btnRegister'])) {
    if ($_POST['name'] == "") {
        $register_error_message = 'Name field is required!';
    } else if ($_POST['email'] == "") {
        $register_error_message = 'Email field is required!';
    } else if ($_POST['username'] == "") {
        $register_error_message = 'Username field is required!';
    } else if ($_POST['password'] == "") {
        $register_error_message = 'Password field is required!';
    } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $register_error_message = 'Invalid email address!';
    } else if (isEmail($_POST['email'])) {
        $register_error_message = 'Email is already in use!';
    } else if (isUsername($_POST['username'])) {
        $register_error_message = 'Username is already in use!';
    } else {
        $user_id = Register($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']);
        $_SESSION['user_id'] = $user_id;
        header("Location: Home.php");
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
    <h4>Register</h4>
    <?php
    if ($register_error_message != "") {
        echo '<div class="alert"><strong>Error: </strong> ' . $register_error_message . '</div>';
    }
    ?>
    <form action="register.php" method="post">
        <div class="form">
            <label for="">Name</label>
            <input type="text" name="name" class="form_input"/>
        </div>
        <div class="form">
            <label for="">Email</label>
            <input type="email" name="email" class="form_input"/>
        </div>
        <div class="form">
            <label for="">Username</label>
            <input type="text" name="username" class="form_input"/>
        </div>
        <div class="form">
            <label for="">Password</label>
            <input type="password" name="password" class="form_input"/>
        </div>
        <div class="form">
            <input type="submit" name="btnRegister" class="btn" value="Register"/>
        </div>
    </form>
</div>
</body>
</html>