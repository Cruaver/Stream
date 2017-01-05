<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 13:07
 */

require("log_reg_func.php");
require("./Database.php");

session_start();

if (empty($_SESSION['user_id'])) {
    header("Location: Home.php");
}

$db = DB();
$user = UserDetails($_SESSION['user_id']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Stream</title>
</head>
<body>
<div class="container">
    <h2>
        Profile
    </h2>
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