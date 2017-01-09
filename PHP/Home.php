<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 13:11
 */

require_once("get_db_func.php");
require_once("log_reg_func.php");

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
        <h2>Les dernier film</h2>
        <?php
        $res = get_last("film");
        $i = 0;
        while (isset($res[$i])) {
            ?>
            <a href="Film_info.php?ID=<?php echo $res[$i]['ID']; ?>">
                <div class="card">
                    <div class="content">
                        <div class="front">
                            <div>
                                <img class="image"
                                     src="<?php echo $res[$i]['image']; ?>"
                                     alt="<?php echo $res[$i]['Titre']; ?>">
                                <p><strong><?php echo $res[$i]['Titre']; ?></strong></p>
                            </div>
                        </div>
                        <div class="back">
                            <p>
                                <strong><?php echo $res[$i]['Titre']; ?></strong>
                            <h4>De : <?php echo $res[$i]['Realisateur']; ?></h4>
                            <h4>Avec : <?php echo $res[$i]['Acteur']; ?></h4>
                            <h4>Sorti : <?php echo $res[$i]['Date_sorti']; ?></h4>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <?php
            $i = $i + 1;
        } ?>
        <br>
        <h2>Les Derniere series</h2>
        <?php
        $res = get_last("serie");
        $i = 0;
        while (isset($res[$i])) {
            ?>
            <a href="Film_info.php?ID=<?php echo $res[$i]['ID']; ?>">
                <div class="card">
                    <div class="content">
                        <div class="front">
                            <div>
                                <img class="image"
                                     src="<?php echo $res[$i]['Image']; ?>"
                                     alt="<?php echo $res[$i]['Titre']; ?>">
                                <p><strong><?php echo $res[$i]['Titre']; ?></strong></p>
                            </div>
                        </div>
                        <div class="back">
                            <p>
                                <strong><?php echo $res[$i]['Titre']; ?></strong>
                            <h4>De : <?php echo $res[$i]['Realisateur']; ?></h4>
                            <h4>Avec : <?php echo $res[$i]['Acteur']; ?></h4>
                            <h4>Sorti : <?php echo $res[$i]['Date_sorti']; ?></h4>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <?php
            $i = $i + 1;
        }
        print_r($res);
        ?>
    </div>
</div>
</body>
</html>
