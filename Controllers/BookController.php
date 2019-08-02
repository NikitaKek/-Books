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
        $book = new Book('', $title, $numPages, $price, $author);
        $BookService = new BookService;
        $BookService->addBook($book);
    }

    static public function delBook($id)
    {
        $BookService = new BookService;
        $BookService->delBook($id);
    }


    static public function editBook($id,$title, $numPage, $price)
    {
        $book = new Book($id,$title,$numPage,$price,'');
        $BookService = new BookService();
        $BookService->editBook($book);
    }
}