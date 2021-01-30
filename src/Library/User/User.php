<?php

namespace MisLibros;

class User
{

    protected $storage;

    function __construct()
    {
        $this->storage = new SessionStorage();
    }

    function setLanguage($language)
    {
        $this->storage->set('language', $language);
    }

    function getLanguage()
    {
        return $this->storage->get('language');
    }

    // ...
}
