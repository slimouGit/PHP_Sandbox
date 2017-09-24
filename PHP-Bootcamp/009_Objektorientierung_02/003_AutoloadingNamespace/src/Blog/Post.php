<?php

namespace Blog;

use User\User as SomeUser;

class Post implements PostInterface
{

    public $title;

    public $user;

    public function __construct()
    {
        $this->user = new SomeUser();
    }
}

?>
