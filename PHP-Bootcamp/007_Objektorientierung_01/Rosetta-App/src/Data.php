<?php

/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 30.03.17
 * Time: 14:16
 */
class Data
{
    private $id;
    public $german;
    public $french;
    public $italian;
    public $rubric;
    public $info;
    public $carline;
    public $deleted;

    /**
     * Data constructor.
     * @param $id
     * @param $german
     * @param $french
     * @param $italian
     * @param $rubric
     * @param $info
     * @param $carline
     * @param $deleted
     */
    public function __construct($id, $german, $french, $italian, $rubric, $info, $carline = "General", $deleted = false)
    {
        $this->id = $id;
        $this->german = $german;
        $this->french = $french;
        $this->italian = $italian;
        $this->rubric = $rubric;
        $this->info = $info;
        $this->carline = $carline;
        $this->deleted = $deleted;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function printData(){
        echo "<br/>-------------------------<br/>";
        var_dump($this->getId());
        echo "<br/>";
        var_dump($this->german);
        echo "<br/>";
        var_dump($this->french);
        echo "<br/>";
        var_dump($this->italian);
        echo "<br/>";
        var_dump($this->rubric);
        echo "<br/>";
        var_dump($this->info);
        echo "<br/>";
        var_dump($this->carline);
        echo "<br/>";
        var_dump($this->deleted);
        echo "<br/>-------------------------<br/>";
    }

}