<?php

namespace Tests\MisLibros\Entity;

use MisLibros\Library\User\User;
use PHPUnit\Framework\TestCase;

class UserEntityTest extends TestCase
{

    public function testUserEntity()
    {

        $user = new User('Pepe');

        $this->assertEquals('Pepe', $user->getName('name'));
    }

}
