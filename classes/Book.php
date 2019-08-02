<?php


class Book
{
    private $title;
    private $id;
    private $author = [];
    private $numPages;
    private $price;
    private $bookService;


    /**
     * Book constructor.
     * @param $id
     * @param $title
     * @param $numPages
     * @param $price
     * @param $author
     */
    public function __construct($id, $title, $numPages, $price, $author)
    {
        $this->bookService = new BookService();
        $this->id = $id;
        $this->numPages = $numPages;
        $this->price = $price;
        $this->title = $title;
        $this->author = $author;
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
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $numPages
     */
    public function setNumPages($numPages)
    {
        $this->numPages = $numPages;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        if (empty($this->title)) {
            $this->title = $this->bookService->getBookTitle($this->id);
        }
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        if (empty($this->price)) {
            $this->price = $this->bookService->getBookPrice($this->id);
        }
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getNumPages()
    {
        if (empty($this->numPages)) {
            $this->numPages = $this->bookService->getBookNumPages($this->id);
        }
        return $this->numPages;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        if (empty($this->author)) {
            $this->author = $this->bookService->getBookAuthor($this->id);
        }
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }
}