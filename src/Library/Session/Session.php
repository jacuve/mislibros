<?php

namespace MisLibros\Library\Session;

use MisLibros\Library\Session\SessionInterface;

class Session
{

    protected $sessionAdapter;

    function __construct(SessionInterface $sessionAdapter)
    {
        $this->sessionAdapter = $sessionAdapter;
    }

    function set($key, $value)
    {
        $this->sessionAdapter->set($key, $value);
    }

    function get($key)
    {
        return $this->sessionAdapter->get($key);
    }

}
