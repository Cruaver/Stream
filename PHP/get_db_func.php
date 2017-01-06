<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 06/01/17
 * Time: 11:39
 */

require_once('./Database.php');

function get_last($categ)
{

    if ($categ == "film")
        try {
            $db = DB();
            $query = $db->prepare("SELECT * FROM Film_info AS FIF JOIN Films AS FIL ON FIF.ID = FIL.ID_info ORDER BY Date_sorti DESC ");
            $query->execute();
            if ($query->rowCount() > 0) {
                return ($query->fetchAll());
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    else if ($categ == "serie") {
        try {
            $db = DB();
            $query = $db->prepare("SELECT * FROM Series_info AS SIF JOIN Series AS SRS ON SIF.ID = SRS.ID_info ORDER BY Date_sorti DESC ");
            $query->execute();
            if ($query->rowCount() > 0) {
                return ($query->fetchAll());
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}

function get_info_id($categ, $ID){
    if ($categ == "film")
        try {
            $db = DB();
            $query = $db->prepare("SELECT * FROM Film_info AS FIF JOIN Films AS FIL ON FIF.ID = FIL.ID_info WHERE FIF.ID = :ID ");
            $query->bindParam("ID", $ID, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                return ($query->fetch());
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    else if ($categ == "serie") {
        try {
            $db = DB();
            $query = $db->prepare("SELECT * FROM Series_info AS SIF JOIN Series AS SRS ON SIF.ID = SRS.ID_info WHERE SIF.ID = :ID");
            $query->bindParam("ID", $ID, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                return ($query->fetch());
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}