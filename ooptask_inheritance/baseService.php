<?php

 namespace carServices;
 
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


 
 