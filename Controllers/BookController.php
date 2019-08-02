<?php
require_once ('./Services/BookService.php');

class BookController extends Controller
{

    /**
     * @param $title
     * @param $author
     * @param $numPages
     * @param $price
     */
    static public function addBook($title, $author, $numPages, $price)
    {
        $book = new Book;
        $book->setAuthor($author);
        $book->setNumPages($numPages);
        $book->setPrice($price);
        $book->setTitle($title);
        $BookService = new BookService;
        $BookService->addBook($book);
    }

    static public function delBook($id)
    {
        BookService::delBook($id);
    }


    static public function editBook($id,$title, $numPage, $price)
    {
        $book = new Book();
        $book->setTitle($title);
        $book->setId($id);
        $book->setNumPages($numPage);
        $book->setPrice($price);

        $BookService = new BookService();
        $BookService->editBook($book);
    }
}