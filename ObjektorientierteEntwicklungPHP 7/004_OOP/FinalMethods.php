<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 15.10.2017
 * Time: 14:59
 */

class BaseProduct{
    final public function getVKPrice($ek){
        return $ek*1.5;
    }
}

class FoodProduct extends BaseProduct{
    /*
    GEHT NICHT
    public function getVKPrice($ek){
        return $ek*1.5;
    }
    */
}