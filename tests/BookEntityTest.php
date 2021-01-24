<?php
// tests/Entity/BookEntityTest.php
namespace Tests\MisLibros\Entity;

use MisLibros\Domain\Entity\Book;
use MisLibros\Domain\Entity\Category;
use PHPUnit\Framework\TestCase;

class BookEntityTest extends TestCase
{
    public function testBookEntity()
    {
        $mockCategory = $this->createMock('MisLibros\Domain\Entity\Category');

        $mockCategory
            ->expects($this->atLeastOnce())
            ->method('getName')
            ->willReturn('programming');

        $book = new Book('Clean code', 'Robert C. Martin', new \DateTime(), $mockCategory);

        $this->assertEquals('Clean code', $book->getTitle());
        $this->assertEquals('Robert C. Martin', $book->getAuthor());
        $this->asserttrue($book->getDatePublished() instanceof \DateTime);

        $this->assertEquals('programming', $book->getCategory()->getName());
    }
}