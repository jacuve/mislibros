<?php

namespace MisLibros\Library\Session;

use MisLibros\Library\Session\SessionInterface;

class PhpSessionStorage implements SessionInterface
{
    public function get($var)
    {
        return isset($_SESSION[$var]) ? $_SESSION[$var] : null;
    }
    public function set($var, $value)
    {
        $_SESSION[$var] = $value;
    }
}
