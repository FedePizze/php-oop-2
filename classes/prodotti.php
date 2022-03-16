<?php

class prodotti {

    public $genereProdotto;
    public $colore;
    public $prezzo;
    public $mese;

    public function __construct($genereProdotto, $colore, $prezzo){

        $this->genereProdotto = $genereProdotto;
        $this->colore = $colore;
        $this->prezzo = $prezzo;
        $this->mese = date('m');
        $this->genere($genereProdotto);
    }

    function genere($genereProdotto) {
        if($genereProdotto == 'cibo' || $genereProdotto == 'giochi' || $genereProdotto == 'cucce') {
           $this->genereProdotto = $genereProdotto;
        } else {
           $this->genereProdotto = 'altro genere (' . ($genereProdotto) . ')';
        }
   
        if($genereProdotto == 'antipulci') {
            if ($this->mese == '05' || $this->mese == '06' || $this->mese == '07' || $this->mese == '08') {
            $this->prezzo = ($this->prezzo / 20) * 1000;
            }
        }
    }

}

?>