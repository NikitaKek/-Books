<?php
require_once ('./Adapters/AuthorAdapter.php');
require_once ('./Services/BookService.php');
class AuthorService
{

    private $adapter;

    public function __construct()
    {
        $this->adapter = new AuthorAdapter();
    }

    /**
     * @param Author $author
     *
     */
    public function addAuthor(Author $author)
    {
        $name = $author->getName();
        $date = $author->getDate();
        $this->adapter->addAuthor($name,$date);
    }


    public function delAuthor($id)
    {
        $BookService = new BookService();
        $result = $this->adapter->getbookid($id);
        foreach ($result as $row):
            print_r($row['book_id']);
           $BookService->delBook($row['book_id']);
        endforeach;
        $this->adapter->delAuthor($id);
    }

    public function editAuthor(Author $author)
    {
        $id = $author->getId();
        $name = $author->getName();
        $date = $author->getDate();

        $this->adapter->editAuthor($id , $name, $date);
    }

    public function getAuthorName($id)
    {
        return $this->adapter->AuthorName($id);
    }

    public function getAuthorDate($id)
    {
        return $this->adapter->AuthorDate($id);
    }
}