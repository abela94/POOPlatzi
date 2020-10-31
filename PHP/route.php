<?php

class Route{
    public $id;
    public $init = array();
    public $end = array();

    public function __construct($id, $init, $end){
        $this -> id = $id;
        $this -> init = $ini;
        $this -> end = $end;
    }
}

?>
