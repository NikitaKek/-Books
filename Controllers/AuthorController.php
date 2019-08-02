<?php
require_once ('./Services/AuthorService.php');
class  AuthorController extends Controller
{

    static public function addAuthor($name , $date)
    {
         $author = new author;
         $author->setName($name);
         $author->setDate($date);
         $AuthorService = new AuthorService();
         $AuthorService->addAuthor($author);
    }

    static public function delAuthor($id)
    {
        $author = new author;
        $author->setId($id);
        $AuthorService = new AuthorService();
        $AuthorService->delAuthor($id);
    }

    static public function editAuthor($id, $name , $date )
    {
        $author = new author;
        $author->setId($id);
        $author->setName($name);
        $author->setDate($date);
        $AuthorService = new AuthorService();
        $AuthorService->editAuthor($author);
    }
}