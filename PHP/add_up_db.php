<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 09/01/17
 * Time: 16:47
 */

include_once("Database.php");

session_start();

function set_comm_note($id_film, $note, $commentaire)
{
    try {
        $db = DB();
        $query = $db->prepare("INSERT INTO Commentaire(ID_film, Login, ID_user, Note, N_note) VALUES (:ID_film, :ID_user, :Note, 1);");
        $query->bindParam("ID_film", $id_film, PDO::PARAM_STR);
        $query->bindParam("ID_user", $_SESSION['username'], PDO::PARAM_STR);
        $query->bindParam("Note", $note, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            return ($query->fetchAll());
        }
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}