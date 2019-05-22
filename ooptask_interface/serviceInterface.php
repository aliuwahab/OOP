<?php


interface serviceInterface {
    
    public function setBasePrice($basePrice);
    public function setServicePrice($servicePrice);
    public function calculateCost();
}
