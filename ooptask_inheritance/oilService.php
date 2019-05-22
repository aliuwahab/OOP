<?php
namespace carServices;

include_once 'baseService.php';


/**
 * Description of oilService
 *
 * @author Iman
 */
 
class oilService extends basicService {
	private $oilServicePrice;
	
	 public function __construct($oilServicePrice)
        {
            $this->oilServicePrice = $oilServicePrice;
        }

	public function getoilServicePrice() {
		return $this->oilServicePrice;
	}
}
