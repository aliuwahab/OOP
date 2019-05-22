<?php

include_once 'baseService.php';
include_once 'oilService.php';
include_once 'tireRotation.php';

//Faiq is interested in Basic Inspection;
$carServiceObj = new carServices\basicService(50);
$basicServicePrice = $carServiceObj->getBasicPrice();
echo "Faiq is interested in Basic Inspection: ".$basicServicePrice.'<br/>';



//Eshaan is interested in carrying out Oil Change;

$oilServiceObj = new carServices\oilService(85);
$oilTotalCost  = $basicServicePrice + $oilServiceObj->getoilServicePrice();
echo "Eshaan is interested in carrying out Oil Change: ".$oilTotalCost."<br/>";


//Aliu is interested in carrying out Tire Rotation;
$tireServiceObj = new carServices\tireRotation(23.5);
$tireserviceRotationCost = $tireServiceObj->gettireRotationServicePriceServicePrice();
$totalTireServiceCost = $basicServicePrice+  $tireserviceRotationCost;
echo "Aliu is interested in carrying out Tire Rotation: ". $totalTireServiceCost."<br/>";

//Faiq also enquired about the total cost of performing Oil Change and Tire rotation together on the same car

$t = $basicServicePrice+ $tireserviceRotationCost+$oilServiceObj->getoilServicePrice();
echo "Faiq also enquired about the total cost of performing Oil Change and Tire rotation together on the same car: ".$t;