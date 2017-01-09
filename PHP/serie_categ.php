<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 09/01/17
 * Time: 15:02
 */


require_once("get_db_func.php");
require_once("log_reg_func.php");

session_start();

$errMsg = "";
$categ_array = ["Action", "Animation", "Aventure", "Comédie", "Comédie Dramatique", "Comédie Musicale", "Dessin Animé",
    "Divers", "Documentaire", "Drame", "Erotique", "Espionnage", "Expérimenta", "Famille", "Fantastique", "Guerre",
    "Musical", "Péplum", "Policier", "Romance", "Thriller", "Western"];

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
                        <a href="#m_film" class="btn">Manage Film</a>
                        <a href="#m_Serie" class="btn">Manage Series</a>
                    <?php } ?>
                <?php } ?>
            </div>
        </li>
    </ul>
</div>
<div class="container">
    <h3>Rechercher :</h3>
    <form method="post" action="serie_categ.php">
        <div class="select">
            <select name="categ">
                <option value="1">Action</option>
                <option value="2">Animation</option>
                <option value="3">Aventure</option>
                <option value="4">Comédie</option>
                <option value="5">Comédie Dramatique</option>
                <option value="6">Comédie Musicale</option>
                <option value="7">Dessin Animé</option>
                <option value="8">Divers</option>
                <option value="9">Documentaire</option>
                <option value="10">Drame</option>
                <option value="11">Erotique</option>
                <option value="12">Espionnage</option>
                <option value="13">Expérimental</option>
                <option value="14">Famille</option>
                <option value="15">Fantastique</option>
                <option value="16">Guerre</option>
                <option value="17">Musical</option>
                <option value="18">Péplum</option>
                <option value="19">Policier</option>
                <option value="20">Romance</option>
                <option value="21">Thriller</option>
                <option value="22">Western</option>
            </select>
        </div>
        <input type="submit" name="btnfind" value="GO">
        <h3><?php echo $errMsg ?></h3>
    </form>
    <div id="contain1">
        <?php if (empty($_POST['btnfind'])) { ?>
            <h2>TOUTES LES SERIES</h2>
            <?php
            $res = get_all("serie");
        } else if (isset($_POST['btnfind'])) {
            $categ = $_POST['categ'];
            $res = get_find("serie", $categ);
            ?>
            <h2>LES SERIES DU GENRE : <?php echo $categ_array[$_POST['categ'] - 1]; ?></h2>
        <?php }
        $i = 0;
        while (isset($res[$i])) {
            ?>
            <a href="Serie_info.php?ID=<?php echo $res[$i]['ID']; ?>">
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
                            <strong><?php echo $res[$i]['Titre']; ?></strong>
                            <h4>De : <?php echo $res[$i]['Realisateur']; ?></h4>
                            <h4>Avec : <?php echo $res[$i]['Acteur']; ?></h4>
                            <h4>Sorti : <?php echo $res[$i]['Date_sorti']; ?></h4>
                        </div>
                    </div>
                </div>
            </a>
            <?php
            $i = $i + 1;
        }
        ?>
    </div>
</div>
</body>
</html>