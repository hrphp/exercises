<?php

/**
 * Class Book
 */
class Book
{

    /**
     * @var
     */
    private $_author;
    /**
     * @var
     */
    private $_title;
    /**
     * @var
     */
    private $_genre;
    /**
     * @var
     */
    private $_price;
    /**
     * @var
     */
    private $_publishDate;
    /**
     * @var
     */
    private $_description;
    /**
     * @var
     */
    private $_id;
    /**
     * @var
     */
    private $_url;

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->_author = $author;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->_author;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->_genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->_genre;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->_price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param mixed $publishDate
     */
    public function setPublishDate($publishDate)
    {
        $this->_publishDate = $publishDate;
    }

    /**
     * @return mixed
     */
    public function getPublishDate()
    {
        return $this->_publishDate;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->_url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->_url;
    }

}
