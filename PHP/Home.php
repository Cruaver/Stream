<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 13:11
 */

require("log_reg_func.php");
require("./Database.php");

session_start();

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
                <a href="#">Film</a>
                <a href="#">Serie</a>
            </div>
        </li>
        <li><a href="#">test</a></li>
        <li class="dropdown-param"><a class="dropbtn-param"><img src="../IMG/parametre.png"></a>
            <div class="dropdown-content-param">
                <?php
                if (empty($_SESSION['user_id'])) {
                    ?>
                    <a href="register.php">register</a>
                    <a href="login.php">login</a>
                <?php } else if (isset($_SESSION['user_id'])) { ?>
                    <a href="logout.php" class="btn">Logout</a>
                <?php } ?>
            </div>
        </li>
    </ul>
</div>
<div class="container">
    <h3>Hello
        <?php
        if (isset($_SESSION['user_id'])) {
            $user = UserDetails($_SESSION['user_id']);
            echo $user->name . ",";
        } else if (empty($_SESSION['user_id']))
            echo " new visitor,";
        ?>
    </h3>
    <h2>THE TOP 3 YOU LIKE</h2>
    <div id="slider">
        <figure>
            <a href="#top1"><img
                        src="http://img01.deviantart.net/52e5/i/2016/064/2/1/pokemon_moon_wallpaper__8_5__by_nicholas_checchia-d9u159b.png"></a>
            <a href="#top2"><img
                        src="http://img12.deviantart.net/89ee/i/2016/064/8/6/pokemon_sun_wallpaper__8_5__by_nicholas_checchia-d9u15js.png"></a>
            <a href="#top3"><img src="http://purenintendo.com/wp-content/uploads/2013/07/3DSXL_zps44e462e8.jpg"></a>
            <a href="#top1"><img
                        src="http://img01.deviantart.net/52e5/i/2016/064/2/1/pokemon_moon_wallpaper__8_5__by_nicholas_checchia-d9u159b.png"></a>
        </figure>
    </div>
    <div id="contain1">
        <div>
            <a href="#"><img class="image"
                             src="http://t1.gstatic.com/images?q=tbn:ANd9GcQDf4I5-8xPyu2RSTWz1yPlbBsWfAhv63ZoLeUTuVt7DYOP1d65"
                             alt="Vaiana film affiche">
                <p><strong>Vaiana</strong></p></a>
        </div>
    </div>
</div>
</body>
</html>
