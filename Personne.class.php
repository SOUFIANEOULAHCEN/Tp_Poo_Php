<?php

abstract class Personne
{
    protected $num;
    protected $nom;
    protected $prenom;
    protected $heuresup;
    protected $salairehoraire;

    public function __construct($num, $nom, $prenom, $heuresup, $salairehoraire)
    {
        $this->num = $num;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->heuresup = $heuresup;
        $this->salairehoraire = $salairehoraire;
    }

    abstract public function CalculSalire();

    public function __toString()
    {
        return "Numero : " . $this->num . "\nNom : " . $this->nom . "\nPrenom : " . $this->prenom . "\nHeurs supplementaires : " . $this->heuresup . "\nSalaire:" . $this->salairehoraire;
    }

    function __get($proprity)
    {
        if (property_exists($this, $proprity)) {
            return  $this->$proprity;
        } else {
            return  "Property not found";
        }
    }
    function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            return  $this->$name = $value;
        } else {
            return  "Property not found";
        }
    }
}




// $formateur = new Formateur(3, "Johnson", "Michael", 6, 12, 2000);
// echo $formateur;
