<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 13:18
 */

session_start();
unset($_SESSION['user_id']);
session_destroy();
header("Location: index.php");
?>