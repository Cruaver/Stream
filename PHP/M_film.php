<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 09/01/17
 * Time: 15:31
 */

require_once("get_db_func.php");
require_once("log_reg_func.php");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Stream</title>
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
                        <a href="M_film.php" class="btn">Manage Film</a>
                        <a href="#m_Serie" class="btn">Manage Series</a>
                    <?php } ?>
                <?php } ?>
            </div>
        </li>
    </ul>
</div>
<div class="container">

</div>
</body>
</html>
