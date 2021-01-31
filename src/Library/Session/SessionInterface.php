<?php

namespace MisLibros\Library\Session;

interface SessionInterface
{

    public function set($key, $value);

    public function get($key);
}
