<?php
require_once ('./Services/CustomerService.php');

class CustomerController extends Controller
{
    /**
     * @param $name
     */
    static public function addCustomer($name)
    {
        $customer = new Customer('',$name);
        $CustomerService = new CustomerService();
        $CustomerService->addCustomer($customer);
    }

    /**
     * @param $id
     * @param $name
     */
    static public function editCustomer($id, $name)
    {
        $customer = new Customer($id, $name);
        $CustomerService = new CustomerService();
        $CustomerService->editCustomer($customer);
    }

    /**
     * @param $id
     */
    static public function deleteCustomer($id)
    {
        $CustomerService = new CustomerService();
        $CustomerService->deleteCustomer($id);
    }
}