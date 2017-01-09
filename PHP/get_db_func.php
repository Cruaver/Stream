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
            $query = $db->prepare("SELECT * FROM Film_info ORDER BY Date_sorti DESC LIMIT 6");
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
            $query = $db->prepare("SELECT * FROM Series_info ORDER BY Date_sorti DESC LIMIT 6");
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
            $query = $db->prepare("SELECT * FROM Film_info WHERE ID = :ID ");
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
            $query = $db->prepare("SELECT * FROM Series_info WHERE ID = :ID");
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