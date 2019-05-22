<?php
namespace App;
use App\basicService;


//Tire rotation child Class
 class tireRotation extends basicService  {
	private $tireRotationServicePrice;

         public function __construct($tireRotationServicePrice)
        {
            $this->tireRotationServicePrice = $tireRotationServicePrice;
        }

	
	public function gettireRotationServicePriceServicePrice() {
		return $this->tireRotationServicePrice;
	}
     
}