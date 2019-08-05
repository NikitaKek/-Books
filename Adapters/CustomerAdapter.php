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
        $resault = false;
        if(!empty($id)) {
            $query = "DELETE FROM `customer` WHERE id =". $id;
            DataBase::query($query);
            $resault = true;
        }
        return $resault;
    }

    public function editCustomer($id,$name)
    {
        $resault = false;
        if(!empty($id)) {
            $query = "UPDATE `customer` SET name ='$name'WHERE id =". $id;
            DataBase::query($query);
            $resault = true;
        }
        return $resault;
    }

    public function findDeals($id)
    {
        $query = "SELECT `id_deal` FROM `CustomerDealBook` WHERE id_customer =". $id;
        $arr = DataBase::query($query);
        return $arr;
    }

    public function deleteCustomerDealBook($id, $idName)
    {
        $resault = false;
        if(!empty($id)) {
            $query = "DELETE FROM `CustomerDealBook` WHERE '$idName' =". $id;
            DataBase::query($query);
            $resault = true;
        }
        return $resault;
    }
}