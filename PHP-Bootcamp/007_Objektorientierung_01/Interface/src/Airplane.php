<?php

/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 31.03.17
 * Time: 12:04
 */
class Airplane implements DriveInterface
{
    public function drive($location)
    {
        // TODO: Implement drive() method.
        return "Ein Flugzeug fliegt ueber {$location}";
    }

    public function colorize($color)
    {
        // TODO: Implement colorize() method.
        return "Das Flugzeug ist {$color}";
    }
}