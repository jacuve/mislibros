<?php

namespace Tests\MisLibros\Entity;

use MisLibros\Library\Category\Category;
use PHPUnit\Framework\TestCase;

class CategoryEntityTest extends TestCase
{

    public function testCategoryEntity()
    {
        $book = new Category('programming');

        $this->assertEquals('programming', $book->getName());
    }

}
