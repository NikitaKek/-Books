<?php


class AuthorAdapter
{

    /**
     * @param $name
     * @param $date
     */

    public static function addAuthor($name , $date)
    {
        $query = "INSERT INTO `author` (`name`,`date`) VALUES 
                ('$name',
                '$date')";
        DataBase::query($query);
    }


    /**
     * @param $id
     */
    public function delAuthor($id)
    {
        $query = "DELETE FROM `author` WHERE ID = ".$id;
        DataBase::query($query);
    }

    /**
     * @param $id
     * @param $name
     * @param $date
     */
    public function editAuthor($id , $name, $date)
    {
        if ($date == NULL) {
            $query = "UPDATE `author` SET name = '$name' WHERE ID = '$id'";
        }
        if ($name == NULL) {
            $query = "UPDATE `author` SET date = '$date'  WHERE ID = '$id'";
        }
        if ($name != NULL && $date != NULL) {
            $query = "UPDATE `author` SET name = '$name',date = '$date'  WHERE ID = '$id'";
        }
        DataBase::query($query);
    }

    public function getNumAuthor()
    {
        $query = "SELECT MAX(ID) FROM author";
        $row = DataBase::query($query);
        return $row[0];
    }

    /**
     * @param $book_id
     */
    public function delbookauthor($author_id)
    {

        $query = "DELETE FROM `bookauthor` WHERE author_id = ".$author_id;
        DataBase::query($query);
        print_r($query);
    }

    public function getbookid($author_id)
    {
        $query = "SELECT * FROM `bookauthor` WHERE author_id = ".$author_id;
        $row = DataBase::querySELECT($query);
        return $row;
    }

    public function AuthorName($id)
    {
        $query = "SELECT name FROM `author` WHERE id =". $id;
        return DataBase::querySELECT($query);
    }
    public function AuthorDate($id)
    {
        $query = "SELECT date FROM `author` WHERE id =". $id;
        return DataBase::querySELECT($query);
    }

}





