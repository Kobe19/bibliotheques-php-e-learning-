<?php
require_once "Model.class.php";
require_once "Livre.class.php"; 

class LivreManager extends Model{
    private $livres;

    public function ajoutLivre($livre){
        $this->livres[] = $livre;
    }

    public function getLivres(){
        return $this->livres;
    }

    public function chargementLivres(){
        $req = $this->getBdd()->prepare("SELECT * FROM livres");
        $req->execute();
        $meslivres = $req->fetchAll(PDO::FETCH_ASSOC);// FETCH_ASSOC -> supprimer les doublons
        //echo "<pre>";
        //print_r($meslivres);
        //echo "</pre>";
        $req->closeCursor();

        foreach($meslivres as $livre){
            $l = new Livre($livre['id'],$livre['titre'],$livre['nbPAges'],$livre['image']);
            $this->ajoutLivre($l);
        }
    }
    
}