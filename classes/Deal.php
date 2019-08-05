<?php
require_once ('./Services/DealService.php');

class Deal
{
    private $id;
    private $store;
    private $date;
    private $dealService;


    /**
     * Deal constructor.
     * @param $id
     * @param $date
     * @param $store
     */
    public function __construct($id, $date, $store)
    {
        $this->id = $id;
        $this->date = $date;
        $this->store = $store;
        $this->dealService = new DealService();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        if (empty($this->date)) {
            $this->date = $this->dealService->getDealDate($this->id);
        }
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getStore()
    {
        if (empty($this->store)) {
            $this->store = $this->dealService->getDealStore($this->id);
        }
        return $this->store;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $store
     */
    public function setStore($store)
    {
        $this->store = $store;
    }
}