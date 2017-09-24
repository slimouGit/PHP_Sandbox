<?php
/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 03.04.17
 * Time: 14:48
 */

namespace App\Post;

use ArrayAccess;

class PostModel implements ArrayAccess
{
    public $id;
    public $title;
    public $content;

    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
}