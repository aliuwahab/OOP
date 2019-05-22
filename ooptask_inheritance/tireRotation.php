<?php
namespace carServices;

include_once 'baseService.php';


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