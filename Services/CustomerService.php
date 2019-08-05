<?php
require_once ('./Adapters/CustomerAdapter.php');
require_once ('DealService.php');
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
        $deals = $this->adapter->findDeals($id);
        $DealService = new DealService();
        $this->adapter->deleteCustomerDealBook($id);
        foreach ($deals as $row) {
            $DealService->deleteDeal($row['id_deal']);
        }
        $this->adapter->deleteCustomer($id);
    }

    public function editCustomer(Customer $customer)
    {
        $id = $customer->getId();
        $name = $customer->getName();
        $this->adapter->editCustomer($id,$name);
    }

}