<?php
/**
 * Created by PhpStorm.
 * User: kabro_c
 * Date: 05/01/17
 * Time: 12:56
 */

include_once("Database.php");

session_start();

function Register($name, $email, $username, $password)
{
    try {
        $db = DB();
        $query = $db->prepare("INSERT INTO utilisateur(name, email, username, password) VALUES (:name,:email,:username,:password)");
        $query->bindParam("name", $name, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $enc_password = hash('sha256', $password);
        $query->bindParam("password", $enc_password, PDO::PARAM_STR);
        $query->execute();
        return ($db->lastInsertId());
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}

function isUsername($username)
{
    try {
        $db = DB();
        $query = $db->prepare("SELECT user_id FROM utilisateur WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            return (true);
        } else {
            return (false);
        }
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}

function isEmail($email)
{
    try {
        $db = DB();
        $query = $db->prepare("SELECT user_id FROM utilisateur WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            return (true);
        } else {
            return (false);
        }
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}

function Login($username, $password)
{
    try {
        $db = DB();
        $query = $db->prepare("SELECT user_id FROM utilisateur WHERE (username=:username OR email=:username) AND password=:password");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $enc_password = hash('sha256', $password);
        $query->bindParam("password", $enc_password, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetch(PDO::FETCH_OBJ);
            return ($result->user_id);
        } else {
            return (false);
        }
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}

function UserDetails($user_id)
{
    try {
        $db = DB();
        $query = $db->prepare("SELECT user_id, name, username, email FROM utilisateur WHERE user_id=:user_id");
        $query->bindParam("user_id", $user_id, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            return ($query->fetch(PDO::FETCH_OBJ));
        }
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}

function is_admin()
{
    try {
        $db = DB();
        $query = $db->prepare("SELECT * FROM utilisateur WHERE ID=:ID AND Admin = 1");
        $query->bindParam("ID", $_SESSION['user_id'], PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            return (true);
        } else {
            return (false);
        }
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}