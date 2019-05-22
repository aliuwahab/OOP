<?php

include 'serviceInterface.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  class baseService implements serviceInterface{
     
    private $price;
    private $basePrice;
    
      public function setBasePrice($basePrice){
          $this->basePrice = $basePrice;
      }
      
      public function setServicePrice($price){
          $this->price = $price;
      }
    
      
      public  function calculateCost() {
          return $this->basePrice;
      }
}