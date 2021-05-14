<?php

abstract class Model{
    private static $pdo; // accessible à toute les classes qui heriteront de Model


    private static function setBdd(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=biblio;charset=utf8","root","AmityPressing96.");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //gestion des erreurs
    }

    protected function getBdd(){
        if(self::$pdo === null){ //testons si une connexion existe deja 
            self::setBdd();
        }
        return self::$pdo;
    }
}