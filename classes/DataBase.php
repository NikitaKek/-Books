<?php


class DataBase
{
    public static $host = 'localhost';
    public static $user = 'root';
    public static $pass = '';
    public static $db_name = 'store';

    public static function connect()
    {
        $link = mysqli_connect(self::$host, self::$user, self::$pass, self::$db_name);
        if (!$link)
        {
            echo 'NO con With BD, Con error: ' . mysqli_connect_errno() . ', Error: ' . mysqli_connect_error();
            exit;
        }
        return($link);
    }

    /**
     * @param $query
     * @return mixed
     */

    public static function querySelect($query)
    {
       $link = self::connect();
        $data = $link->query($query);
            return $data;
    }


    /**
     * @param $query
     * @return mixed
     */
    public static function query($query)
    {
        $link = self::connect();

        $sql = mysqli_query($link,$query);
        if (!$sql) {
            echo '<p>Error: ' . mysqli_error($link) . '</p>';
        }


        $row = mysqli_fetch_all($sql, MYSQLI_ASSOC);
        return $row;

    }

    public static function queryINSERT($query)
    {
        $link = self::connect();

        $sql = mysqli_query($link,$query);
        if (!$sql) {
            echo '<p>Error: ' . mysqli_error($link) . '</p>';
        }

        return mysqli_insert_id($link);

    }


}