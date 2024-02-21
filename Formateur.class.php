<?php
require './heritage/Personne.class.php';
class Formateur extends Personne
{

    protected $salairefix;

    public function __construct($num, $nom, $prenom, $heuresup, $salairehoraire, $salairefix)
    {
        parent::__construct($num, $nom, $prenom, $heuresup, $salairehoraire);

        $this->salairefix = $salairefix;
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
        $this->salairefix = $this->salairehoraire * $this->heuresup;
        return $this->salairefix;
    }

    public function __toString()
    {
        return parent::__toString() . " Salaire fixe: ". $this->salairefix;
    }
}
