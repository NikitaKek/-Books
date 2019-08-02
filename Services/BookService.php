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
        $name = $book->getTitle();
        $numPages = $book->getNumPages();
        $price = $book->getPrice();
        $arr = array('name' =>  $name ,
                      'numPages' =>  $numPages,
                        'price' => $price);
        $this->adapter->addBook($arr);
        $author = $book->getAuthor();
        $numBook = $this->adapter->getNumBook();
        for($i = 0; $i < count($author); $i++) {
            $this->adapter->addbookauthor($numBook, $author[$i]);
        }
    }

    public function delBook($id)
    {
        $this->adapter->delbookauthor($id);
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
                $notemptyarr[] = "$key='$value'";
            }
        }
        $this->adapter->editBook($notemptyarr, $id);
    }

}