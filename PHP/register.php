<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 12:53
 */

require_once('./log_reg_func.php');
require_once('./Database.php');

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
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
<div id="menu">
    <ul>
        <li><a href="Home.php">Home</a></li>
        <li class="dropdown"><a>Categorie</a>
            <div class="dropdown-content">
                <a href="film_categ.php">Film</a>
                <a href="serie_categ.php">Serie</a>
            </div>
        </li>
        <li class="dropdown-param"><a class="dropbtn-param"><img src="../IMG/parametre.png"></a>
            <div class="dropdown-content-param">
                <?php
                if (empty($_SESSION['user_id'])) {
                    ?>
                    <a href="register.php">register</a>
                    <a href="login.php">login</a>
                <?php } else if (isset($_SESSION['user_id'])) { ?>
                    <a href="logout.php" class="btn">Logout</a>
                    <?php if (is_admin()) { ?>
                        <a href="#m_film" class="btn">Manage Film</a>
                        <a href="#m_Serie" class="btn">Manage Series</a>
                    <?php } ?>
                <?php } ?>
            </div>
        </li>
    </ul>
</div>
<div>
    <?php
    if ($register_error_message != "") {
        echo '<div class="alert"><strong>Error: </strong> ' . $register_error_message . '</div>';
    }
    ?>
    <form method="post" action="register.php">
        <h1>Register</h1>
        <div class="inset">
            <p>
                <label for="">Name</label>
                <input type="text" name="name" id="email">
            </p>
            <p>
                <label for="">Email</label>
                <input type="email" name="email" id="email">
            </p>
            <p>
                <label for="">Username</label>
                <input type="text" name="Username" id="email">
            </p>
            <p>
                <label for="">Password</label>
                <input type="password" name="password" id="email">
            </p>
        </div>
        <p class="p-container">
            <input type="submit" name="btnRegister" id="go" value="Register">
        </p>
    </form>
</div>
</body>
</html>