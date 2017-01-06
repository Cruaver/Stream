<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 12:45
 */

function DB()
{

    $Host = "localhost";
    $User = "root";
    $Pass = "1234";
    $DB = "Stream";

    try {
        $db = new PDO('mysql:host=' . $Host . ';dbname=' . $DB . '', $User, $Pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return ($db);
    } catch (PDOException $e) {
        return ("Error!: " . $e->getMessage());
    }
}