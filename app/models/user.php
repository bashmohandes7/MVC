<?php
namespace MVC\models;
use MVC\core\model;
use PDO;

class user extends model{
    function getAllUsers(){
        $data = model::db()->run("SELECT * FROM `user`")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function getUser($email, $password){
        $data = model::db()->run("SELECT * FROM `user` WHERE `email` = ? AND `password` = ?", [$email, $password])->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    function addUser($name, $email, $password){
        $data = model::db()->run("INSERT INTO `user`(`name`,`email`,`password`) VALUES('$name' ,'$email','$password')");
        return $data;
    }
}