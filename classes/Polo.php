<?php
require_once '../conexao/Crud.php';

class Polo extends Crud{
    private $polo;
    
    function setPolo($polo) {
        $this->polo = $polo;
    }
}
