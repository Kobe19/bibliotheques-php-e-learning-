<?php
require_once "models/LivreManager.class.php";

class LIvresController{
    private $livreManager;

    public function __construct(){
        $this->livreManager = new LivreManager;
        $this->livreManager->chargementLivres();
    }
    
    public function afficherLivres(){
        $livres = $this->livreManager->getLIvres();
        require "views/livres.view.php";
    }

    public function affichageLivre($id){
        $livre = $this->livreManager->getLivreById($id);
        require "views/afficherLivre.view.php";
    }

    public function ajoutLivre(){
        require "views/ajoutLivre.view.php";
    }
}