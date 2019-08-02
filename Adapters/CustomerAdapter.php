<?php


class CustomerAdapter
{
    public function addCustomer($name)
    {
        $query = "INSERT INTO `customer` (`name`) VALUES ('$name')";
        return DataBase::queryINSERT($query);
    }

    public function nameCustomer($id)
    {
        $query = "SELECT `name` FROM `customer` WHERE id =". $id;
        $name = DataBase::query($query);
        return $name[0]['name'];
    }

    public function deleteCustomer($id)
    {
        $query = "DELETE FROM `customer` WHERE id =". $id;
        DataBase::query($query);
    }

    public function editCustomer($id,$name)
    {
        $query = "UPDATE `customer` SET name ='$name'WHERE id =". $id;
        DataBase::query($query);
    }
}