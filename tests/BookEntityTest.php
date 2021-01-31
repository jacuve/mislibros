<?php

namespace Tests\MisLibros\Entity;

use DateTime;
use MisLibros\Library\Book\Book;
use PHPUnit\Framework\TestCase;

class BookEntityTest extends TestCase
{

    public function testBookEntity()
    {

        $mockCategory = $this->CreateMock('MisLibros\Library\Category\Category', 'programming');

        $mockCategory
                ->expects($this->atLeastOnce())
                ->method('getName')
                ->willReturn('programming');

        $book = new Book('Clean code', 'Robert C. Martin', new DateTime(), $mockCategory);

        $this->assertEquals('Clean code', $book->getTitle());
        $this->assertEquals('Robert C. Martin', $book->getAuthor());
        $this->assertTrue($book->getDatePublished() instanceof DateTime);

        $this->assertEquals('programming', $book->getCategory()->getName());
    }

}
