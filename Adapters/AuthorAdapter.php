<?php


class AuthorAdapter
{
    /**
     * @param $name
     * @param $date
     * @return int
     */
    public static function addAuthor($name , $date)
    {
       $query = "INSERT INTO `author` (`name`,`date`) VALUES 
                ('$name',
                '$date')";
            return DataBase::queryINSERT($query);
    }
    /**
     * @param $id
     */
    public function delAuthor($id)
    {
        $result = false;
        if (!empty($id)) {
            $query = "DELETE FROM `author` WHERE ID = " . $id;
            DataBase::query($query);
        }
        return $result;
    }
    /**
     * @param $id
     * @param $name
     * @param $date
     */
    public function editAuthor(array $arr, $id)
    {
        $result = false;
        if (!empty($id)) {
            $set = implode(',', $arr);
            $query = "UPDATE `author` 
                    SET " . $set . " WHERE id = " . $id;
            DataBase::query($query);
        }
        return $result;
    }
     /**
     * @param $book_id
     * @return bool
     */
    public function deleteBookAuthor($author_id)
    {
        $result = false;
        if (!empty($author_id)) {
            $query = "DELETE FROM `bookauthor` WHERE author_id = ".$author_id;
            $result = DataBase::query($query);
        }
        return $result;
    }

    public function getbookid($author_id)
    {
        $query = "SELECT * FROM `bookauthor` WHERE author_id = ".$author_id;
        $row = DataBase::querySELECT($query);
        return $row;
    }

    public function AuthorName($id)
    {
        $query = "SELECT `name` FROM `author` WHERE id =". $id;
        $name = DataBase::query($query);
        return $name[0]['name'];
    }
    public function AuthorDate($id)
    {
        $query = "SELECT `date` FROM `author` WHERE id =". $id;
        $date = DataBase::query($query);
        return $date[0]['date'];
    }

}





