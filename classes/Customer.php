<?php
require_once ('./Services/CustomerService.php');
class Customer
{
    private $id;
    private $name;
    private $CustomerService;


    /**
     * customer constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->CustomerService = new CustomerService();
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
    public function getName()
    {
        if (empty($this->name)) {
            $this->name = $this->CustomerService->getNameCustomer($this->id);
        }
        return $this->name;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}