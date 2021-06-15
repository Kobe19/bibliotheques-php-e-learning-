<?php
session_start();


define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));


require_once "controllers/LivresControllers.controller.php";
$livreController = new LivresController;

try{
    if(empty($_GET['page'])){
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']),FILTER_SANITIZE_URL); // secure what is sent through the url
        //echo "<pre>";
        //print_r($url);
        //echo "</pre>";
        switch($url[0]){
            case "accueil" : require "views/accueil.view.php";
            break;
            case "livres" : //$livreController->afficherLivres();
                if(empty($url[1])){
                    $livreController->afficherLivres();
                } else if($url[1] === "l"){
                    $livreController->affichageLivre($url[2]);
                } else if($url[1] === "a"){
                    $livreController->AjoutLivre();
                } else if($url[1] === "m"){
                    $livreController->modificationLivre($url[2]);
                } else if($url[1] === "s"){
                    $livreController->suppressionLivre($url[2]);
                } else if($url[1] === "av"){
                    $livreController->ajoutLivreValidation();
                } else if($url[1] === "mv"){
                    $livreController->modificationLivreValidation();
                } else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            default :  throw new Exception("La page n'existe pas");
        }
    }
}
catch(Exception $e){
    $msg = $e->getMessage();
    require "views/error.view.php";
}
