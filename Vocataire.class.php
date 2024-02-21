<?php
require './heritage/Personne.class.php';

class Vocataire extends  Personne
{
    protected $diplome;

    public function __construct($num, $nom, $prenom, $heuresup, $salairehoraire, $diplome)
    {
        parent::__construct($num, $nom, $prenom, $heuresup, $salairehoraire);
        $this->diplome = $diplome;
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

    public function CalculSalire()
    {
        switch ($this->diplome) {
            case '1':
                $this->salaireHoraire = 200;
                break;
            case '2':
                $this->salaireHoraire = 150;
                break;
            case '3':
                $this->salaireHoraire = 100;
                break;
        }

        return $this->salaireHoraire * $this->heuresup ;
    }
}
