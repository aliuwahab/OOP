<?php
namespace App;
use App\basicService;


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
