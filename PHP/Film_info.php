<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 06/01/17
 * Time: 14:25
 */

?>

<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 13:11
 */

require_once("./get_db_func.php");
require_once("./log_reg_func.php");

session_start();

if (empty($_GET['ID'])){
    header("Location: Home.php");
}
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
    <div id="info_film">
        <?php
        $res = get_info_id("film", $_GET['ID']);
        ?>
        <img class="film-image" src="<?php echo $res['image']; ?>" width="200px" height="200px">
        <div class="film-name">
            <h1><?php echo $res['Titre']; ?></h1>
            <?php
            if (isset($res['avent_premiere'])) {
                ?>
                <p>Avent premiere : <?php echo $res['avent_premiere']; ?></p>
                <?php
            }
            ?>
            <p>Sortie : <?php echo $res['Date_sorti']; ?></p>
            <p>Realisateur : <?php echo $res['Realisateur']; ?></p>
            <p>Acteur Principaux : <?php echo $res['Acteur']; ?></p>
            <p>Genres : <?php echo $res['Genres']; ?></p>
            <p>Nationalite : <?php echo $res['Nationalite']; ?></p>
        </div>
        <div class="description">
            <p><?php echo $res['Synopsis']; ?></p>
        </div>
    </div>
</div>
</body>
</html>
