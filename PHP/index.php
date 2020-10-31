<?php

require_once('Car.php');
require_once('Account.php');
require_once('uberX.php');

$uberX = new UberX("ASD565", new Account("Andres","654665"),"Chevrolet","Spark");
$uberX -> printDataCar();

?>