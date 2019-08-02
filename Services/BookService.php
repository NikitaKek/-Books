<?php
require_once ('./Adapters/BookAdapter.php');
class BookService
{
    private $adapter;


    public function __construct()
    {
        $this->adapter = new BookAdapter();
    }

    public function addBook(book $book)
    {
        $title = $book->getTitle();
        $numPages = $book->getNumPages();
        $price = $book->getPrice();
        $arr = array('title' =>  $title ,
                      'numPages' =>  $numPages,
                        'price' => $price);
        print_r($arr);
        $author = $book->getAuthor();
        $numBook = $this->adapter->addBook($arr);
        for($i = 0; $i < count($author); $i++) {
            $this->adapter->addbookauthor($numBook, $author[$i]);
        }
    }

    public function delBook($id)
    {
        $this->adapter->delBookAuthor($id);
        $this->adapter->delBook($id);
    }

    public function editBook(book $book)
    {
        $id = $book->getId();
        $title = $book->getTitle();
        $numPage = $book->getNumPages();
        $price = $book->getPrice();
        $arr = array('id' => $id,
                    'title' => $title,
                    'numPages' => $numPage,
                    'price' => $price);
        foreach ($arr as $key => $value){
            if ($value != NULL) {
                $notEmptyArr[] = "$key='$value'";
            }
        }
        $this->adapter->editBook($notEmptyArr, $id);
    }

    public function getBookTitle($id)
    {
        return $this->adapter->BookTitle($id);
    }
    public function getBookPrice($id)
    {
        return $this->adapter->BookPrice($id);
    }
    public function getBookNumPages($id)
    {
        return $this->adapter->BookNumPages($id);
    }
    public function getBookAuthor($id)
    {
        return $this->adapter->BookAuthor($id);
    }



}