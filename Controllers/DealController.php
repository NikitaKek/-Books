<?php


class DealController extends Controller
{
    public function addDeal($date, $store)
    {
        $deal = new Deal('', $date, $store);
        $dealService = new DealService();
        $dealService->addDeal($deal);
    }

    public function deleteDeal($id)
    {
        $dealService = new DealService();
        $dealService->deleteDeal($id);
    }

    public function editDeal($id, $date, $store)
    {
        $deal = new Deal($id, $date, $store);
        $dealService = new DealService();
        $dealService->editDeal($deal);
    }
}