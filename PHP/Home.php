<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 13:11
 */

if(isset($_SESSION['user_id'])) {
    header("Location: Home_loged.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
<div class="container">
    <a href="register.php">register</a>
    <a href="login.php">login</a>
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
