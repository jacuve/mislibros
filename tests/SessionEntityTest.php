<?php

namespace Tests\MisLibros\Entity;

use MisLibros\Library\Session\Session;
use MisLibros\Library\Session\PhpSessionStorage;
use PHPUnit\Framework\TestCase;

class SessionEntityTest extends TestCase
{

    public function testSessionEntity()
    {

        $session1 = new PhpSessionStorage();
        $session = new Session($session1);
        $session->set('clave1', 'valor1');

        $this->assertEquals('valor1', $session->get('clave1'));
    }

}
