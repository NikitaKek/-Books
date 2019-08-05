<?php
require_once ('./Adapters/DealAdapter.php');
require_once ('CustomerService.php');

class DealService
{
    private $adapter;

    public function __construct()
    {
        $this->adapter = new DealAdapter();
    }

    /**
     * @param Deal $deal
     */
    public function addDeal(Deal $deal)
    {
        $date = $deal->getDate();
        $store = $deal->getStore();
        $this->adapter->addDeal($date, $store);
    }

    public function deleteDeal($id)
    {
        $customerService = new CustomerService();
        $customerService->adapter->deleteCustomerDealBook($id, 'id_deal');
        $this->adapter->deleteDeal($id);
    }

    public function editDeal(Deal $deal)
    {
        $id = $deal->getId();
        $date = $deal->getDate();
        $store = $deal->getStore();
        $arr = array('id' => $id,
            'date' => $date,
            'store' => $store);
        foreach ($arr as $key => $value){
            if ($value != NULL) {
                $notEmptyArr[] = "$key='$value'";
            }
        }
        $this->adapter->editDeal($notEmptyArr, $id);
    }

    public function getDealDate($id)
    {
        return $this->adapter->DealDate($id);
    }

    public function getDealStore($id)
    {
        return $this->adapter->DealStore($id);
    }

}