<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 12:49
 */

require_once('./log_reg_func.php');
require_once('./Database.php');

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
            $_SESSION['username'] = $username;
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
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="../CSS/style.css">
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
    if ($login_error_message != "") {
        echo '<div class="alert"><strong>Error: </strong> ' . $login_error_message . '</div>';
    }
    ?>
    <form method="post" action="login.php">
        <h1>Login</h1>
        <div class="inset">
            <p>
                <label for="email">Username/Email</label>
                <input type="text" name="username" id="email">
            </p>
            <p>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </p>
        </div>
        <p class="p-container">
            <input type="submit" name="btnLogin" id="go" value="Log in">
        </p>
    </form>
</div>
</body>
</Html>