<?php

class Bicycle implements DriveInterface
{

  public function drive($location) {
    return "Ein Fahrrad faehrt in {$location}";
  }

    public function colorize($color)
    {
        // TODO: Implement colorize() method.
        return "Das Fahrrad ist {$this->$color}";
    }

}

 ?>
