<?php
require_once "models/LivreManager.class.php";

class LIvresController{
    private $livreManager;

    public function __construct(){
        $this->livreManager = new LivreManager;
        $this->livreManager->chargementLivres();
    }
    
    public function afficherLIvres(){
        $livres = $this->livreManager->getLIvres();
        require "views/livres.view.php";
    }
}