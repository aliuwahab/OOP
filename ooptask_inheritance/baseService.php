<?php

 namespace App;
 
 class basicService {
	 private $price;
	
	  public function __construct($price)
        {
            $this->price = $price;
        }
	
	public function getBasicPrice() {
		return $this->price;
	}
	 
 }


 
 