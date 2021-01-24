<?php
// tests/Entity/CategoryEntityTest.php
namespace Tests\MisLibros\Entity;

use MisLibros\Domain\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryEntityTest extends TestCase
{
    public function testCategoryEntity()
    {
        $book = new Category('programming');

        $this->assertEquals('programming', $book->getName());
    }
}