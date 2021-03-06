<?php

class ImgRepository
{

  private $limit = 20;

  private $conn;

  public function __construct($connection)
  {
    $this->conn = $connection;
  }

  public function countPages()
  {
    $sql = 'SELECT COUNT(id) as n from img';
    $result = $this->conn->query($sql);
    if ($result) {
      $rows = $result->fetch_assoc();
      return intval(ceil($rows['n']/$this->limit));
    }
    return 0;
  }

  public function findAll($page, $limit=null)
  {
    $limit = $limit ? $limit : $this->limit;
    $offset = ($page-1) * $limit;
    $sql = 'SELECT id, name, alt, description, category FROM img ORDER BY id LIMIT '.$limit.' OFFSET '.$offset.';';
    $result = $this->conn->query($sql);
    $images = [];
    while(is_object($result) && $row = $result->fetch_assoc()) {
      $images[] = $row;
    }
    return $images;
  }

  public function findById($id)
  {
    $sql = 'SELECT id, name, alt, description, category FROM img WHERE id=\'' . $id . '\';';
    $result = $this->conn->query($sql);
    if ($result) {
      return $this->conn->query($sql)->fetch_assoc();
    }

    return [];
  }

  public function save($name, $alt=null, $description=null, $category=null, $id=null)
  {
    $sql = '';
    if ($id){
      $sql = "UPDATE img SET name ='$name', alt='$alt', description='$description', category='$category' WHERE id = $id";
    } else {
      $sql = "INSERT INTO img (name, alt, description, category) VALUES ('$name', '$alt', '$description', '$category')";
    }
    $this->conn->query($sql);
  }

  public function delete($id)
  {
    $sql = 'DELETE FROM img WHERE id= ' . $id .';';
    $this->conn->query($sql);
  }

}
