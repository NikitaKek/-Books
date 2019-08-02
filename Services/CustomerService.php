<?php
require_once ('./Adapters/CustomerAdapter.php');
class CustomerService
{
    private $adapter;

    public function __construct()
    {
        $this->adapter = new CustomerAdapter();
    }

    public function addCustomer(Customer $customer)
    {
        $name = $customer->getName();
        $this->adapter->addCustomer($name);
    }

    public function getNameCustomer($id)
    {
        return $this->adapter->nameCustomer($id);
    }

    public function deleteCustomer($id)
    {
        $this->adapter->deleteCustomer($id);
    }

    public function editCustomer(Customer $customer)
    {
        $id = $customer->getId();
        $name = $customer->getName();
        $this->adapter->editCustomer($id,$name);
    }

}