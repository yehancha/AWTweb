<?php

class Book {

    private $title;
    private $author;

    function __construct() {
        $this->title = 'The Hound of the Baskervilles';
        $this->author = 'Arthur Conan Doyle';
    }

    public function gettitle() {
        return $this->title;
    }

}

$book = new Book();
echo $book->gettitle();