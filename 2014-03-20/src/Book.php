<?php
class Book
{
  private $author;
  private $title;
  private $genre;
  private $price;
  private $publishDate;
  private $description;
  private $id;
  private $url;

  public function setAuthor($author){
    $this->author = $author;
  }

  public function getAuthor(){
    return $this->author;
  }

  public function setTitle($title){
    $this->title = $title;
  }

  public function getTitle(){
    return $this->title;
  }

  public function setGenre($genre){
    $this->genre = $genre;
  }

  public function getGenre(){
    return $this->genre;
  }

  public function setPrice($price){
    $this->price = $price;
  }

  public function getPrice(){
    return $this->price;
  }

  public function setPublishDate($PublishDate){
    $this->publishDate = $PublishDate;
  }

  public function getPrice(){
    return $this->publishDate;
  }

  public function setDescription($description){
    $this->description = $description;
  }

  public function getDescription(){
    return $this->description;
  }

  public function setId($id){
    $this->id = $id;
  }

  public function getId(){
    return $this->id;
  }

  public function setUrl($url){
    $this->url = $url;
  }

  public function getUrl(){
    return $this->url;
  }
}
