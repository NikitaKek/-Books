<?php


class Author
{
    private $id;
    private $name;
    private $date;
    private $authorService;


    /**
     * Author constructor.
     * @param $id
     * @param $name
     * @param $date
     */

    public function __construct($id,$name,$date)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->authorService = new AuthorService();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        if (empty($this->name)) {
            $this->name = $this->authorService->getAuthorName($this->id);
        }
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
            $this->name = $this->authorService->getAuthorDate($this->id);
        }
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
}