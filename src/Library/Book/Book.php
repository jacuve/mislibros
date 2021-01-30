<?php

namespace MisLibros\Library\Book;

class Book
{

    private $title;
    private $author;
    private $datePublished;
    private $category;

    public function __construct(string $title, string $author, $datePublished, $category)
    {
        $this->title = $title;
        $this->author = $author;
        $this->datePublished = $datePublished;
        $this->category = $category;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getDatePublished()
    {
        return $this->datePublished;
    }

    public function getCategory()
    {
        return $this->category;
    }

}
