<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 12:53
 */

require ("log_reg_func.php");
require ("./Database.php");

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
        header("Location: Home_loged.php");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Logo</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<div class="row">
    <div class="col-md-5 well">
        <h4>Register</h4>
        <?php
        if ($register_error_message != "") {
            echo '<div class="alert alert-danger"><strong>Error: </strong> ' . $register_error_message . '</div>';
        }
        ?>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control"/>
            </div>
            <div class="form-group">
                <input type="submit" name="btnRegister" class="btn btn-primary" value="Register"/>
            </div>
        </form>
    </div>
</div>
</body>
</html>