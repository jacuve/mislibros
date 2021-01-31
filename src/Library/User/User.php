<?php

namespace MisLibros\Library\User;

class User
{

    private $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    // ...
}
