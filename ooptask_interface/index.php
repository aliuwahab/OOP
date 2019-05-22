<?php

include_once 'baseService.php'; 
include_once 'oilService.php';
include_once 'tireRotationService.php';

//Faiq is interested in Basic Inspection;
 $carServiceObj = new baseService();
 $carServiceObj->setBasePrice(50);
 echo "Faiq is interested in Basic Inspection: ".$carServiceObj->calculateCost()."<br/>";;
 
 //Eshaan is interested in carrying out Oil Change;
  $carServiceObj = new oilService();
  $carServiceObj->setBasePrice(50);
  $carServiceObj->setServicePrice(85);
  echo "Eshaan is interested in carrying out Oil Change: ".$carServiceObj->calculateCost()."<br/>";
  
  //Aliu is interested in carrying out Tire Rotation;
    $carServiceObj = new tireRotationService();
    $carServiceObj->setBasePrice(50);
    $carServiceObj->setServicePrice(23.5);
    echo "Aliu is interested in carrying out Tire Rotatione: ".$carServiceObj->calculateCost()."<br/>";

  //Faiq also enquired about the total cost of performing Oil Change and Tire rotation together on the same car;
    $carServiceObj = new tireRotationService();
    $carServiceObj->setBasePrice(50);
    $carServiceObj->setServicePrice(23.5);
    
    $carServiceObjOil = new oilService();
    $carServiceObjOil->setBasePrice(0);
    $carServiceObjOil->setServicePrice(85);
    $oilService = $carServiceObjOil->calculateCost();
    $rotate = $carServiceObj->calculateCost();
    $total = $rotate + $oilService;
     echo "Faiq also enquired about the total cost of performing Oil Change and Tire rotation together on the same car: ".$total."<br/>";
    

