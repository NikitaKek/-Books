<?php


class BookAdapter
{
    public function addBook(array $arr)
    {
        $name = $arr['title'];
        $numPages = $arr['numPages'];
        $price = $arr['price'];
        $query = "INSERT INTO `Book` (`title`,`numPages`,`price`) VALUES ('$name','$numPages','$price')";
        return DataBase::queryINSERT($query);
    }

    /**
     * @param $id
     */
    public function delBook($id)
    {
        $resault = false;
        if(!empty($id)) {
            $query = "DELETE FROM `book` WHERE ID = " . $id;
            DataBase::query($query);
            $resault = true;
        }
        return $resault;
    }

    public function editBook(array $arr,$id)
    {

        $resault = false;
        if(!empty($id)) {
            $set = implode(',', $arr);
            $query = "UPDATE `book` 
                    SET ".$set." WHERE id = ".$id;
            DataBase::query($query);
            $resault = true;
        }
        return $resault;
    }
    /**
     * @param $book_id
     */
    public function delBookAuthor($book_id)
    {
        $resault = false;
        if(!empty($id)) {
            $query = "DELETE FROM `bookauthor` WHERE book_id = ".$book_id;
            DataBase::query($query);
            $resault = true;
        }
        return $resault;
    }
    /**
     * @param $book_id
     * @param $author_id
     */
    public function addBookAuthor($book_id, $author_id)
    {
        $resault = false;
        if(!empty($book_id) || !empty($author_id)) {
            $query = "INSERT INTO `bookauthor` (`book_id`,`author_id`) VALUES 
                ('$book_id',
                '$author_id')";
            DataBase::query($query);
            $resault = true;
        }
        return $resault;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function BookTitle($id)
    {
        $query = "SELECT title FROM book WHERE id =". $id;
        $title = DataBase::query($query);
        return $title[0]['title'];
    }

    /**
     * @param $id
     * @return int
     */
    public function BookNumPages($id)
    {
        $query = "SELECT `numPages` FROM `book` WHERE id =". $id;
        $numPages =  DataBase::query($query);
        return $numPages[0]['numPages'];
    }

    /**
     * @param $id
     * @return int
     */
    public function BookPrice($id)
    {
        $query = "SELECT `price` FROM `book` WHERE id =". $id;
        $price = DataBase::query($query);
        return $price[0]['price'];
    }

    /**
     * @param $id
     * @return mixed
     */
    public function BookAuthor($id)
    {
        $query = "SELECT `author_id` FROM `bookauthor` WHERE id =". $id;
        $author_id = DataBase::query($query);
        return $author_id['author'];
    }

    public function deleteCustomerDealBook($id)
    {
        $query = "DELETE FROM `CustomerDealBook` WHERE id_book =". $id;
        DataBase::query($query);
    }
}