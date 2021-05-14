<?php
class Livre{
    private $id;
    private $titre;
    private $nbpages;
    private $image;

    //public static $livres;

    public function __construct($id,$titre,$nbpages,$image)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->nbpages = $nbpages;
        $this->image = $image; 
        //self::$livres[] = $this; 
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    } 

    public function getNbpages(){
        return $this->nbpages;
    }
 
    public function setNbpages($nbpages){
        $this->nbpages = $nbpages;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }
}

?>