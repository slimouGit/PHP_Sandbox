<?php

/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 30.03.17
 * Time: 12:41
 */
class Position
{
    public $namePosition;
    public $betragPosition;
    public $deleted;

    /**
     * Position constructor.
     * @param $namePosition
     * @param $betragPosition
     * @param $deleted
     */
    public function __construct($namePosition, $betragPosition, $deleted = false)
    {
        $this->namePosition = $namePosition;
        $this->betragPosition = $betragPosition;
        $this->deleted = $deleted;
    }

    public function printPosition()
    {
        if ($this->deleted == false) {
            var_dump($this->namePosition);
            var_dump($this->betragPosition);
            echo "<br/>";
        } else {
            echo "{$this->namePosition} ist nicht aktiv<br/>";
        };
    }

    public function deactivatePostion(){
        $this->deleted = true;
        echo "{$this->namePosition} wurde deaktiviert<br/>";
    }



}