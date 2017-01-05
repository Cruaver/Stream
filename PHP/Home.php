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
<div class="menu">
    <nav class="main_nav">
        <div class="menu_navig">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li>
                    <a href="#">Categorie</a>
                    <ul class="dropdown">
                        <li><a href="#Films"></a></li>
                        <li><a href="#Series"></a></li>
                    </ul>
                </li>
                <li><a href="#"><label>test</label></a></li>
                <li class="dropdown-param"><a class="dropbtn-param"><img src="../IMG/parametre.png"></a>
                    <div class="dropdown-content-param">
                        <a href="register.php">register</a>
                        <a href="login.php">login</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
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
