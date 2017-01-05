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
    <title>Stream</title>
</head>
<body>
<div id="menu">
    <ul>
        <a href="Home.php"><li><label>Home</label></li></a>>
        <a href=""<li><label>Categorie</label></li></a>
        <li class="dropdown"><a class="dropbtn"><img src="../IMG/parametre.png"></a>
            <div class="dropdown-content">

            </div>
        </li>
        <a href=""><li><label></label></li></a>

        <li class="dropdown"><a class="dropbtn"><img src="../IMG/parametre.png"></a>
            <div class="dropdown-content">
                <a href="javascript:window.print()">Impression</a>
                <a href="inscription.php">Ajouter un compte</a>
                <a onclick="Users()">Utilisateurs</a>
                <a href="logout.php">Se dÃ©connecter</a>
            </div>
        </li>
    </ul>
</div>
<div class="container">
    <a href="register.php">register</a>
    <a href="login.php">login</a>
    <h3>Hello <?php echo $user->name ?>,</h3>
    <p>
        testetesteteetteetehggewhhguihejoeuhguirehgeuhuigrherghgerhogrr\gergergerreggrrg
        gerergreggregrerregrgergegrergegre
        gerrgerggrergregrgereggregregrregeggreegregrreg
    </p>
    <a href="logout.php" class="btn">Logout</a>
</div>
</body>
</html>
