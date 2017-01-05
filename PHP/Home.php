<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 13:11
 */

if (isset($_SESSION['user_id'])) {
    header("Location: Home_loged.php");
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
        <li><a href="Home.php"><li><label>Home</label></a></li>
        <li class="dropdown"><a class="dropbtn"></a><label>Categorie</label>
            <div class="dropdown-content">
                <a href="#"><label>Film</label></a>
                <a href="#"><label>Serie</label></a>
            </div>
        </li>
        <li><a href="#"><label>test</label></a></li>

        <li class="dropdown"><a class="dropbtn"><img src="../IMG/parametre.png"></a>
            <div class="dropdown-content-param">
                <a href="register.php">register</a>
                <a href="login.php">login</a>
            </div>
        </li>
    </ul>
</div>
<div class="container">
    <h3>Hello <?php echo $user->name ?>,</h3>
    <p>
        testetesteteetteetehggewhhguihejoeuhguirehgeuhuigrherghgerhogrr\gergergerreggrrg
        gerergreggregrerregrgergegrergegre
        gerrgerggrergregrgereggregregrregeggreegregrreg
    </p>
</div>
</body>
</html>
