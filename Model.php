<?php
class Model{
    public $string;
    
    public function __construct(){
        $this->string = "Olá Fabricio";
    }

    public function get_string(){
        return $this->string;
    }
}
