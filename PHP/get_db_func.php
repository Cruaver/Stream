<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 06/01/17
 * Time: 11:39
 */

require("./Database.php");

function get_last(){
    try {
        $db = DB();
        $query = $db->prepare("SELECT * FROM Film_info AS FIF JOIN Films AS FIL ON FIF.ID = FIL.ID_info ORDER BY Date_sorti DESC ");
        $query->execute();
        if ($query->rowCount() > 0) {
            return ($query->fetch(PDO::FETCH_OBJ));
        }
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}