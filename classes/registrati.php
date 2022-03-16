<?php

require_once __DIR__ . '/user.php';

class registrati extends user {

    public $nickname;
    public $password;
    public $sconto = 20;

    public function __construct($nome, $cognome, $nickname, $password){

        parent::__construct($nome, $cognome);
        
        $this->nickname = $nickname;
        $this->password = $password;
    }
}

?>