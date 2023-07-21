<?php
interface IBook {
    public function getBookName();
    public function setBookName($bookName);
    public function getAuthor();
    public function setAuthor($author);
    public function getPublisher();
    public function setPublisher($publisher);
    public function getPublishYear();
    public function setPublishYear($publishYear);
    public function getISBN();
    public function setISBN($isbn);
    public function getChapters();
    public function setChapters($chapters);
}

class Book implements IBook {
    private $bookName;
    private $author;
    private $publisher;
    private $publishYear;
    private $isbn;
    private $chapters;

    public function __construct($bookName, $author, $publisher, $publishYear, $isbn, $chapters) {
        $this->bookName = $bookName;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->publishYear = $publishYear;
        $this->isbn = $isbn;
        $this->chapters = $chapters;
    }

    public function getBookName() {
        return $this->bookName;
    }

    public function setBookName($bookName) {
        $this->bookName = $bookName;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    public function getPublishYear() {
        return $this->publishYear;
    }

    public function setPublishYear($publishYear) {
        $this->publishYear = $publishYear;
    }

    public function getISBN() {
        return $this->isbn;
    }

    public function setISBN($isbn) {
        $this->isbn = $isbn;
    }

    public function getChapters() {
        return $this->chapters;
    }

    public function setChapters($chapters) {
        $this->chapters = $chapters;
    }
}
?>