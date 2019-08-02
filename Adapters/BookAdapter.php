<?php


class BookAdapter
{
    public function addBook(array $arr)
    {
        $name = $arr['name'];
        $numPages = $arr['numPages'];
        $price = $arr['price'];
        $query = "INSERT INTO `Book` (`title`,`numPages`,`price`) VALUES ('$name','$numPages','$price')";
        DataBase::query($query);
    }

    /**
     * @return mixed
     */

    public function getNumBook()
    {
        $query = "SELECT MAX(ID) FROM book";
        $row = DataBase::query($query);
        return $row[0];
    }

    public function delBook($id)
    {
        $query = "DELETE FROM `book` WHERE ID = ".$id;
        DataBase::query($query);
    }

    public function editBook(array $arr,$id)
    {
        $set = implode(',', $arr);
        $query = "UPDATE `book` 
                    SET ".$set." WHERE id = ".$id;
        DataBase::query($query);
        print_r($query);
    }


    /**
     * @param $book_id
     */
    public function delbookauthor($book_id)
    {
        $query = "DELETE FROM `bookauthor` WHERE book_id = ".$book_id;
        DataBase::query($query);
    }


    /**
     * @param $book_id
     * @param $author_id
     */
    public function addbookauthor($book_id, $author_id)
    {
        $query = "INSERT INTO `bookauthor` (`book_id`,`author_id`) VALUES 
                ('$book_id',
                '$author_id')";
        DataBase::query($query);
    }
}