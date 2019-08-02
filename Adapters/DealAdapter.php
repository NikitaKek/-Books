<?php


class DealAdapter
{
    public function addDeal($date, $store)
    {
        $query = "INSERT INTO `deal` (`date`,`store`) VALUES ('$date','$store')";
        return DataBase::queryINSERT($query);
    }

    public function deleteDeal($id)
    {
        $query = "DELETE FROM `deal` WHERE id =". $id;
        DataBase::query($query);
    }

    public function editDeal(array $arr,$id)
    {
        $set = implode(',', $arr);
        $query = "UPDATE `deal` 
                    SET ".$set." WHERE id = ".$id;
        DataBase::query($query);
    }

    public function DealDate($id)
    {
        $query = "SELECT date FROM deal WHERE id =". $id;
        $deal = DataBase::query($query);
        return $deal[0]['deal'];
    }

    public function DealStore($id)
    {
        $query = "SELECT store FROM deal WHERE id =". $id;
        $store = DataBase::query($query);
        return $store[0]['store'];
    }
}