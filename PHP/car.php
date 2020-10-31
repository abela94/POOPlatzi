<?php

class Car{
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license, $driver){
        $this -> license = $license;
        $this -> driver = $driver;
    }

    public function printDataCar(){
        echo "License: ".$this -> license."<br>";
        echo "Document: ".$this -> driver -> document."<br>";
        echo "Name: ".$this -> driver -> name."<br>";
    }
}

?>
