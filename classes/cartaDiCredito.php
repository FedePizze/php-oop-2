<?php

class cartaDiCredito{

    public $giorno;
    public $mese;
    public $anno;
    protected $cartaDiCredito;
    public $validita = true;
    

    public function __construct($giorno, $mese, $anno){

        $this->giorno = $giorno;
        $this->mese = $mese;
        $this->anno = $anno;
        $this->genere();
    }

    public function genere() {
        $this->cartaDiCredito = date("'". $this->mese . "-" . $this->giorno . "-" . $this->anno ."'");

        if ($this->cartaDiCredito < date('m-d-Y')) {
            
            $this->validita = false;
        } else {
            $this->validita = true;
        }
    }

}

?>